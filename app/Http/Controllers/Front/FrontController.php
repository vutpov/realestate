<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Company;
use App\City;
use App\PropertyType;
use App\StateOrProvince;
use DB;
use App\Support\Collection;
use Illuminate\Support\Facades\View;
use App\Visitor;

class FrontController extends Controller
{

    public function home()
    {
        // dd(getLogo());
        return View('front.pages.index');
    }

    public function ceoMessage()
    {
        // dd(getLogo());
        return View('front.pages.ceo-message');
    }
    public function contact()
    {
        return View('front.contact');
    }

    public function about()
    {
        return View('front.about');
    }

    public function search()
    {
        return View('front.search');
    }

    public function getdata(request $re)
    {
        $citys = City::pluck('city', 'cityId');
        $ptype = PropertyType::pluck('propertyType', 'propertyTypeId');
        $state = StateOrProvince::pluck('name', 'stateOrProvinceId');

        //pagination


        $city = $re->cityname;
        $purpose = $re->purposename;
        $minprice = $re->min_price;
        $type = $re->typename;
        $bedrom = $re->bedrom;
        $max_price = $re->max_price;
        $area = $re->area;
        $search_term = $city . " ," . $purpose . " ," . $type . " ," . $bedrom . " ," . $area . " ," . $minprice . " ," . $max_price;
        $showall = $re->showall;
        $search = $re->search;
        $result = "";
        if ($search == "1") {

            if ($city == '' && $purpose == '' && $bedrom == '' && $area == '' &&  $type == '') {
                $result = DB::table('properties')
                    ->leftJoin('u_m_s', 'u_m_s.umId', '=', 'properties.umId')
                    ->leftJoin('property_images', 'property_images.propertyId', '=', 'properties.propertyId')
                    ->leftJoin('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
                    //  ->leftJoin('prop_attrib_details', 'prop_attrib_details.propAttribDetailId', '=', 'properties.propAttribId')
                    ->select(
                        'properties.propertyCode',
                        'properties.description',
                        'properties.no',
                        'properties.st',
                        'properties.price',
                        'properties.location',
                        //       'prop_attrib_details.propAttributeDetail',

                        'property_types.propertyType',
                        'u_m_s.um',
                        'properties.created_at',
                        'properties.unit',
                        'properties.propertyId',
                        'property_images.image'
                    )
                    ->where('properties.price', '>=',  $minprice)
                    ->where('properties.price', '<=', $max_price)
                    ->groupBy('property_images.propertyId')
                    ->orderBy('properties.created_at', 'DESC')->paginate(10);

                
            } else {
                $result = DB::table('properties')
                    ->leftJoin('u_m_s', 'u_m_s.umId', '=', 'properties.umId')
                    ->leftJoin('property_images', 'property_images.propertyId', '=', 'properties.propertyId')
                    ->leftJoin('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
                    //  ->leftJoin('prop_attrib_details', 'prop_attrib_details.propAttribDetailId', '=', 'properties.propAttribId')
                    ->select(
                        'properties.propertyCode',
                        'properties.description',
                        'properties.no',
                        'properties.st',
                        'properties.price',
                        'properties.location',
                        //       'prop_attrib_details.propAttributeDetail',

                        'property_types.propertyType',
                        'u_m_s.um',
                        'properties.created_at',
                        'properties.unit',
                        'properties.propertyId',
                        'property_images.image'
                    )
                    ->where('properties.price', '>=',  $minprice)
                    ->where('properties.price', '<=', $max_price)

                    ->where('property_images.is_featured', '1')
                    ->whereRaw("MATCH(properties.description, properties.no, properties.st, properties.location, properties.unit, properties.propertyCode) AGAINST( ? IN BOOLEAN MODE)", $search_term)
                    // ->orWhereRaw("MATCH(prop_attrib_details.propAtrribute, prop_attrib_details.title) AGAINST( ? IN BOOLEAN MODE)",  $search_term)
                    ->orWhereRaw("MATCH(property_types.propertyType) AGAINST( ? IN BOOLEAN MODE)",  $search_term)
                    ->orWhereRaw("MATCH(u_m_s.um) AGAINST(? IN BOOLEAN MODE)",  $search_term)
                    ->groupBy('property_images.propertyId')
                    ->orderBy('properties.created_at', 'DESC')->paginate(10);
            }
        }
        if ($showall == "2") {
            $result = DB::table('properties')
                ->leftJoin('u_m_s', 'u_m_s.umId', '=', 'properties.umId')
                ->leftJoin('property_images', 'property_images.propertyId', '=', 'properties.propertyId')
                ->leftJoin('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
                //    ->leftJoin('prop_attrib_details', 'prop_attrib_details.propAttribDetailId', '=', 'properties.propAttribId')
                ->select(
                    'properties.propertyCode',
                    'properties.description',
                    'properties.no',
                    'properties.st',
                    'properties.price',
                    'properties.location',
                    //   'prop_attrib_details.propAttributeDetail',

                    'property_types.propertyType',
                    'u_m_s.um',
                    'properties.created_at',
                    'properties.unit',
                    'properties.propertyId',
                    'property_images.image'
                )
                ->where('property_images.is_featured', '1')
                ->groupBy('property_images.propertyId')
                ->orderBy('properties.created_at', 'DESC')->paginate(10);
        }



        // ->take($re->get('limit', 10))

        // dd($result);
        // $result->withPath('show-result/url');
        $data = [
            'result' => $result,
            'citys' => $citys,
            'ptype' => $ptype,
            'state' => $state
        ];

        return $data;
    }


    public function showResult(Request $re)
    {

        // $citys = City::pluck('city', 'cityId');
        // $ptype = PropertyType::pluck('propertyType', 'propertyTypeId');
        // $state = StateOrProvince::pluck('name', 'stateOrProvinceId');

        // //pagination


        // $city = $re->cityname;
        // $purpose = $re->purposename;
        // $minprice = $re->min_price;
        // $type = $re->typename;
        // $bedrom = $re->bedrom;
        // $max_price = $re->max_price;
        // $area = $re->area;
        // $search_term = $city . " ," . $purpose . " ," . $type . " ," . $bedrom . " ," . $area ;
        // $showall = $re->showall;
        // $search = $re->search;
        // $result = "";
        // if ($search == "1") {




        //         // $result = DB::table('properties')
        //         //     ->leftJoin('u_m_s', 'u_m_s.umId', '=', 'properties.umId')
        //         //     ->leftJoin('property_images', 'property_images.propertyId', '=', 'properties.propertyId')
        //         //     ->leftJoin('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
        //         //     //  ->leftJoin('prop_attrib_details', 'prop_attrib_details.propAttribDetailId', '=', 'properties.propAttribId')
        //         //     ->select(
        //         //         'properties.propertyCode',
        //         //         'properties.description',
        //         //         'properties.no',
        //         //         'properties.st',
        //         //         'properties.price',
        //         //         'properties.location',
        //         //         //       'prop_attrib_details.propAttributeDetail',

        //         //         'property_types.propertyType',
        //         //         'u_m_s.um',
        //         //         'properties.created_at',
        //         //         'properties.unit',
        //         //         'properties.propertyId',
        //         //         'property_images.image'
        //         //     )
        //         //     ->where('properties.price', '>',  $minprice)
        //         //     ->where('properties.price', '<', $max_price)

        //         //     ->where('property_images.is_featured', '1')
        //         //     ->whereRaw("MATCH(properties.description, properties.no, properties.st, properties.location, properties.unit, properties.propertyCode) AGAINST( ? IN BOOLEAN MODE)", $search_term)
        //         //     // ->orWhereRaw("MATCH(prop_attrib_details.propAtrribute, prop_attrib_details.title) AGAINST( ? IN BOOLEAN MODE)",  $search_term)
        //         //     ->orWhereRaw("MATCH(property_types.propertyType) AGAINST( ? IN BOOLEAN MODE)",  $search_term)
        //         //     ->orWhereRaw("MATCH(u_m_s.um) AGAINST(? IN BOOLEAN MODE)",  $search_term)
        //         //     ->groupBy('property_images.propertyId')
        //         //     ->orderBy('properties.created_at', 'DESC')->paginate(10);





        // }
        // if ($showall == "2") {
        //     $result = DB::table('properties')
        //         ->leftJoin('u_m_s', 'u_m_s.umId', '=', 'properties.umId')
        //         ->leftJoin('property_images', 'property_images.propertyId', '=', 'properties.propertyId')
        //         ->leftJoin('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
        //         //    ->leftJoin('prop_attrib_details', 'prop_attrib_details.propAttribDetailId', '=', 'properties.propAttribId')
        //         ->select(
        //             'properties.propertyCode',
        //             'properties.description',
        //             'properties.no',
        //             'properties.st',
        //             'properties.price',
        //             'properties.location',
        //             //   'prop_attrib_details.propAttributeDetail',

        //             'property_types.propertyType',
        //             'u_m_s.um',
        //             'properties.created_at',
        //             'properties.unit',
        //             'properties.propertyId',
        //             'property_images.image'
        //         )
        //         ->where('property_images.is_featured', '1')
        //         ->groupBy('property_images.propertyId')
        //         ->orderBy('properties.created_at', 'DESC')->paginate(10);
        // }



        // // ->take($re->get('limit', 10))

        // // dd($result);
        // // $result->withPath('show-result/url');
        // $data = [
        //     'result' => $result,
        //     'citys' => $citys,
        //     'ptype' => $ptype,
        //     'state' => $state
        // ];

        $data = $this::getdata($re);


        return View('front.show', $data);
    }

    public function showDetail()
    {


        return View('front.show-detail');
    }

    public function showDetails($id)
    {
        $citys = City::pluck('city', 'cityId');
        $ptype = PropertyType::pluck('propertyType', 'propertyTypeId');
        $state = StateOrProvince::pluck('name', 'stateOrProvinceId');

        $t = DB::table('property_images')
            ->join('properties', 'property_images.propertyId', '=', 'properties.propertyId')
            ->join('u_m_s', 'u_m_s.umId', '=', 'properties.umId')
            ->join('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
            //    ->join('prop_attributes', 'prop_attributes.propAttributeid', '=', 'properties.propAttribId')
            ->select(
                'property_images.image',
                'properties.propertyCode',
                'properties.description',
                'properties.no',
                'properties.st',
                'properties.price',
                'properties.location',
                //    'prop_attributes.propAttribute',
                'property_types.propertyType',
                'u_m_s.um',
                'property_images.propertyId'
            )->where('property_images.propertyId', $id)->get();

        $information = DB::table('properties')
            ->join('u_m_s', 'properties.umId', '=', 'u_m_s.umId')
            ->join('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
            ->join('prop_attributes', 'prop_attributes.propAttributeid', '=', 'propAttribId')
            ->select(
                'properties.propertyCode',
                'properties.description',
                'properties.no',
                'properties.st',
                'properties.price',
                'properties.location',
                'prop_attributes.propAttribute',
                'property_types.propertyType',
                'u_m_s.um',
                'properties.created_at',
                'properties.unit'
            )->where('properties.propertyId', '=', $id)->get();


        $data = [
            't' =>  $t,
            'citys' => $citys,
            'ptype' => $ptype,
            'state' => $state, 'information' => $information
        ];

        return View('front.show-detail', $data);
    }


    public function getLogo()
    {
        return App\Company::select('logo')->get()[0];
    }

    public function addCityDetails(Request $re)
    {

        $citys = City::pluck('city', 'cityId');
        $ptype = PropertyType::pluck('propertyType', 'propertyTypeId');
        $state = StateOrProvince::pluck('name', 'stateOrProvinceId');

        $t = DB::table('property_images')
            ->join('properties', 'property_images.propertyId', '=', 'properties.propertyId')
            ->join('u_m_s', 'u_m_s.umId', '=', 'properties.umId')
            ->join('property_types', 'property_types.propertyTypeId', '=', 'properties.propertyTypeId')
            //     ->join('prop_attrib_details', 'prop_attrib_details.propAttribDetailId', '=', 'properties.propAttribDetailId')
            ->select(
                'property_images.image',
                'properties.propertyCode',
                'properties.description',
                'properties.no',
                'properties.st',
                'properties.price',
                'properties.location',
                //     'prop_attrib_details.propAttributeDetail',

                'property_types.propertyType',
                'u_m_s.um',
                'property_images.propertyId'
            )->where('property_images.is_featured', '1')
            ->orderBy('properties.created_at', 'DESC')
            ->paginate(20);


        $data = [
            't' =>  $t,
            'citys' => $citys,
            'ptype' => $ptype,
            'state' => $state
        ];

        //return view('front.search', compact('citys', 'ptype', 'state','t'));
        return view('front.search', $data);
    }
    function array_repeated($array)
    {
        if (!is_array($array)) {
            return false;
        }

        $duplicates = array();
        foreach ($array as $key => $val) {
            end($array);
            $k = key($array);
            $v = current($array);

            while ($k !== $key) {
                if ($v === $val) {
                    $duplicates[$key] = $v;
                    break;
                }

                $v = prev($array);
                $k = key($array);
            }
        }

        return $duplicates;
    }


    function unique_multi_array($array, $key)
    {
        $temp_array = array();
        $i = 0;
        $key_array = array();

        foreach ($array as $val) {
            if (!in_array($val[$key], $key_array)) {
                $key_array[$i] = $val[$key];
                $temp_array[$i] = $val;
            }
            $i++;
        }
        return $temp_array;
    }

    public function getproperttype()
    {
        // $ptype = PropertyType::pluck('propertyType', 'propertyTypeId')->get();
        // return view('front.search', compact('ptype'));
        $ptype = PropertyType::all();
        $citys = City::all();
        $data = array(
            'ptype' =>  $ptype,
            'citys' => $citys
        );
        return View('front.search', $data);
    }

    public function gets()
    {
        //  $ptype = PropertyType::pluck('propertyType', 'propertyTypeId')->get();
        // return view('front.search', compact('ptype'));
        // $ptype= DB::table("property_types")
        // // ->where("nation_id",$id)
        // ->pluck("propertyType","propertyTypeId")
        // ->toArray();
        // return response()->json($ptype);
        $p = PropertyType::all();
        return response()->json($p);
    }

    public function method()
    {
        $nations = PropertyType::all()->pluck('propertyType', 'propertyTypeId');

        return response()->json($nations);
    }

    public function myform()
    {
        $citys = DB::table("cities")->lists("city", "cityId");
        return view('front.search', compact('citys'));
    }


    /**
     * Get Ajax Request and restun Data
     *
     * @return \Illuminate\Http\Response
     */
    public function myformAjax($id)
    {
        $cities = DB::table("property_types")
            ->where("propertyTypeId !=", $id)
            ->lists("propertyType", "propertyTypeId");
        return json_encode($cities);
    }

    public function scopeSearch(Request $re)
    {
        // $columns = implode(',', $this->searchable);

        // $searchableTerm = $this->fullTextWildcards($term);

        // return $query->selectRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE) AS relevance_score", [$searchableTerm])
        //     ->whereRaw("MATCH ({$columns}) AGAINST (? IN BOOLEAN MODE)", $searchableTerm)
        //     ->orderByDesc('relevance_score');
        $search = $re->get('search');
        $post = DB::table('users')->where('name', 'like', '%' . search . '%');

        return View('front.show', ['post' => $post]); //Example Search ;
    }


    public function examplesearch()
    {

        // $query = Dog::where('dogname', 'like', $dogsch);
        // if ($aval == "n") {
        //     $query->where('adopted', '=', 1);
        // } else if ($aval == "y") {
        //     $query->where('adopted', '=', 0);
        // }
        // $dogs = $query->orderBy('lastedit', 'DESC')->paginate(5);

        // Sets the parameters from the get request to the variables.
        $name = Request::get('name');
        $hasCoffeeMachine = Request::get('hasCoffeeMachine');

        // Perform the query using Query Builder
        $result = DB::table('customers')
            ->select(DB::raw("*"))
            ->where('name', '=', $name)
            ->where('has_coffee_machine', '=', $hasCoffeeMachine)
            ->get();

        return $result;
    }




    public function storeVisitor(Request $request)
    {

        $visitor = request()->validate([
            'name' => 'required|min:5|max:50',
            'gender' => 'required',
            'address' => 'required|min:5',
            'tel' => 'required|min:9',
            'email' => 'required|min:12|unique:visitors'
        ]);

        //   $this->validate($request,[
        //     'name' => 'required|min:5|max:50',
        //     'gender' => 'required',
        //     'address' => 'required|min:5',
        //     'tel' => 'required|min:10',
        //     'email' => 'required|min:12|unique:visitors'

        // ] );


        DB::table('visitors')->insert($visitor);
        $last_id = DB::getPDO()->lastInsertId();

        $userAttr = request()->validate([
            'username' => 'required|min:5|max:20|unique:users',
            'password' => 'required|min:6',
            'confirmed' => 'required|min:6|same:password'
        ]);

        // $visitorId = DB::table('visitors')->insertGetId($visitor);
        //  $role = Role::where('role', 'Admin')->first();
        $rID =   DB::table('roles')->select('roleId')
            ->where('roleId', '=', '2')
            ->first();
        unset($userAttr['confirmed']);
        $userAttr['staffId'] =  $last_id;
        $userAttr['roleId'] = '2';
        $userAttr['password'] = $userAttr['password'];


        DB::table('users')->insert($userAttr);

        return redirect('/system');
        // return view('admin.login.index');
    }

    public function getVisitor()
    {
        return View('front.register');
    }

    public function indexvisitor()
    {
        return View('front.virsitor');
    }
}
