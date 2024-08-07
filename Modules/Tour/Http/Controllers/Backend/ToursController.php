<?php

namespace Modules\Tour\Http\Controllers\Backend;

use App\Authorizable;
// use App\Http\Controllers\Backend\BackendBaseController;
use App\Http\Controllers\Controller;
use App\Models\Package;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;

class ToursController extends Controller
{
    use Authorizable;

    public $module_title;

    public $module_name;

    public $module_path;

    public $module_icon;

    public $module_model;

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Tours';

        // module name
        $this->module_name = 'tours';

        // directory path of the module
        $this->module_path = 'tour::backend';

        // module icon
        $this->module_icon = 'fa-regular fa-sun';

        // module model name, path
        $this->module_model = "App\Models\Service";
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $$module_name = $module_model::paginate();

        logUserAccess($module_title.' '.$module_action);

        return view(
            "{$module_path}.{$module_name}.index_datatable",
            compact('module_title', 'module_name', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Retrieves a list of items based on the search term.
     *
     * @param  Request  $request  The HTTP request object.
     * @return JsonResponse The JSON response containing the list of items.
     */
    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = $module_model::where('title', 'LIKE', "%{$term}%")
                            ->orWhere('price', 'LIKE', "%{$term}%")
                            ->limit(7)->get();

        $$module_name = [];

        foreach ($query_data as $row) {
            $$module_name[] = [
                'id' => $row->id,
                'text' => $row->tile.' (Slug: '.$row->slug.')',
            ];
        }
        return response()->json($$module_name);
    }

    /**
     * Retrieves the data for the index page of the module.
     *
     * @return Illuminate\Http\JsonResponse
     */
    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = label_case($module_title);

        $$module_name = $module_model::where('service_type', 'tours')->select('id', 'images', 'title', 'price','starting_point','ending_point', 'country', 'duration');

        $data = $$module_name;

        return Datatables::of($$module_name)
            ->addColumn('action', function ($data) {
                $module_name = $this->module_name;

                return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('images', function ($data) {
                // if ($data->image) {
                //     return '<a href="' . route('backend.tours.show', $data->id) . '">
                //                 <img src="' . asset('public/storage/') . '/' . $data->image . '" alt="" width="100px">
                //             </a>';
                // }
                if ($data->images) {
                    $images = json_decode($data->images);
                    $html = '<a href="' . route('backend.tours.show', $data->id) . '">';

                    if ($images && count($images) > 0) {
                        // foreach ($images as $image) {
                            $html .= '<img src="' . asset('public/storage/' . $images[0]) . '" alt="cruise" width="100px">';
                        // }
                    }

                    $html .= '</a>';

                    return $html;
                }
            })
            // ->editColumn('status', function ($data) {
            //     if ($data->status == 1){
            //         return '<span class="badge text-bg-success">Active</span>';
            //     }else{
            //         return '<span class="badge text-bg-warning">Inactive</span>';
            //     }

            // })
            ->rawColumns(['images', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        logUserAccess($module_title.' '.$module_action);

        return view(
            "{$module_path}.{$module_name}.create",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Store a new resource in the database.
     *
     * @param  Request  $request  The request object containing the data to be stored.
     * @return RedirectResponse The response object that redirects to the index page of the module.
     *
     * @throws Exception If there is an error during the creation of the resource.
     */
    public function store(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $modelData = $request->all();

        // $imagePath = null;
        // if ($request->hasFile('videos')) {
        //     $imagePath = $request->file('videos')->store('tours', 'public');
        //     $modelData = $request->except('videos');
        //     $modelData['videos'] = $imagePath;
        // }
        $modelData = $request->except('images');
        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imagePath = $file->store('tours', 'public');
                $imagePaths[] = $imagePath;
            }
        }

        if (!empty($imagePaths)) {
            $modelData['images'] = json_encode($imagePaths);
        }

        if (!empty($request->start_datetime)) {
            $modelData['start_date'] = $request->start_datetime;
        }

        if (!empty($request->end_datetime)) {
            $modelData['end_date'] = $request->end_datetime;
        }

        if (!empty($request->amenities)) {
            $modelData['amenities'] = json_encode($request->amenities);
        }

        if (!empty($request->videos)) {
            $videos = explode("=", $request->videos);

            if (count($videos) > 1) {
                $modelData['videos'] = $videos[1];
            } else {
                $modelData['videos'] = $request->videos;
            }
        } else {
            $modelData['videos'] = null;
        }
        $$module_name_singular = $module_model::create($modelData);

        flash(icon()."New '".Str::singular($module_title)."' Added")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/{$module_name}");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::findOrFail($id);

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "{$module_path}.{$module_name}.show",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_name_singular', 'module_action', "{$module_name_singular}")
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';

        $$module_name_singular = $module_model::findOrFail($id);

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return view(
            "{$module_path}.{$module_name}.edit",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', "{$module_name_singular}")
        );
    }

    /**
     * Updates a resource.
     *
     * @param  int  $id
     * @param  Request  $request  The request object.
     * @param  mixed  $id  The ID of the resource to update.
     * @return Response
     * @return RedirectResponse The redirect response.
     *
     * @throws ModelNotFoundException If the resource is not found.
     */
    public function update(Request $request, $id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';

        $$module_name_singular = $module_model::findOrFail($id);

        $oldImagePath = $$module_name_singular->image;
        // $oldPackage_image = $$module_name_singular->image;

        $modelData = $request->all();

        // $imagePath = null;
        // if ($request->hasFile('videos')) {
        //     $imagePath = $request->file('videos')->store('tours', 'public');
        //     $modelData = $request->except('videos');
        //     $modelData['videos'] = $imagePath;
        // }
        $modelData = $request->except('images');
        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imagePath = $file->store('tours', 'public');
                $imagePaths[] = $imagePath;
            }
            if ($oldImagePath) {
                Storage::disk('public')->delete($oldImagePath);
            }
        }

        if (!empty($imagePaths)) {
            $modelData['images'] = json_encode($imagePaths);
        }

        if (!empty($request->start_datetime)) {
            // $startTime = Carbon::parse($request->start_datetime);
            $modelData['start_date'] = Carbon::parse($request->start_datetime);
        }

        if (!empty($request->end_datetime)) {
            $modelData['end_date'] = Carbon::parse($request->end_datetime);
        }

        if (!empty($request->amenities)) {
            $modelData['amenities'] = json_encode($request->amenities);
        }

        if (!empty($request->videos)) {
            $videos = explode("=", $request->videos);

            if (count($videos) > 1) {
                $modelData['videos'] = $videos[1];
            } else {
                $modelData['videos'] = $request->videos;
            }
        } else {
            $modelData['videos'] = null;
        }

        $$module_name_singular->update($modelData);

        if($request->package_id){
            $package = Package::where('id', $request->package_id)->first();
        }else{
            $package = new Package();
        }
        $package->service_id = $request->service_id;
        $package->city = $request->package_city;
        $package->validity = $request->validity;

        $package_image = null;
        if ($request->hasFile('package_image')) {
            $package_image = $request->file('package_image')->store('package', 'public');
            $package->image = $package_image;
        }

        if (!empty($request->inclusion)) {
            $package->inclusion = json_encode($request->inclusion);
        }

        $package->description = $request->package_description;
        $package->status = $request->package_status;
        if($request->package_city || $request->validity || $request->inclusion){
            $package->save();
        }


        flash(icon().' '.Str::singular($module_title)."' Updated Successfully")->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        // return redirect()->route("backend.{$module_name}.show", $$module_name_singular->id);
        return redirect()->back();
    }

    /**
     * Destroys a record from the database.
     *
     * @param  int  $id
     * @param  int  $id  The ID of the record to be destroyed.
     * @return Response
     * @return \Illuminate\Http\RedirectResponse Redirects the user to the specified URL.
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException If the record is not found.
     */
    public function destroy($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->delete();

        flash(icon().''.label_case($module_name_singular).' Deleted Successfully!')->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/{$module_name}");
    }

    /**
     * List of trashed ertries
     * works if the softdelete is enabled.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function trashed()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Trash List';

        $$module_name = $module_model::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate();

        logUserAccess($module_title.' '.$module_action);

        return view(
            "{$module_path}.{$module_name}.trash",
            compact('module_title', 'module_name', 'module_path', "{$module_name}", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Restores a data entry in the database.
     *
     * @param  Request  $request
     * @param  int  $id
     * @param  int  $id  The ID of the data entry to be restored.
     * @return Response
     * @return \Illuminate\Http\RedirectResponse The response redirecting to the admin page of the module.
     *
     * @throws \Exception If the data entry cannot be found or restored.
     */
    public function restore($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Restore';

        $$module_name_singular = $module_model::withTrashed()->find($id);
        $$module_name_singular->restore();

        flash(icon().''.label_case($module_name_singular).' Data Restoreded Successfully!')->success()->important();

        logUserAccess($module_title.' '.$module_action.' | Id: '.$$module_name_singular->id);

        return redirect("admin/{$module_name}");
    }

    public function packages($id){
        $data = Package::where('id',$id)->first();
        return response()->json($data);
    }

    public function deletePackages(Request $request){
        // dd($request);
        $data = Package::where('id',$request->id)->first();
        $data->delete();
        return response()->json($data);
    }

}
