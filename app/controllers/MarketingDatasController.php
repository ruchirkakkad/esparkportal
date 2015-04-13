<?php

class MarketingDatasController extends \BaseController {

    public function getIndexView()
    {
        return View::make('marketing_datas.index');
    }

    public function getCreateOneAdd()
    {
        return View::make('marketing_datas.create_one');
    }

    public function postCountriesAdd()
    {

        $data['countries'] = MarketingCountry::select(DB::raw('count(marketing_datas.marketing_states_id) as data_count, marketing_countries.*'))
                        ->leftJoin('marketing_states','marketing_states.marketing_countries_id','=','marketing_countries.marketing_countries_id')
                        ->leftJoin('marketing_datas','marketing_states.marketing_states_id','=','marketing_datas.marketing_states_id')
                        ->groupBy('marketing_countries.marketing_countries_id')->get();

        foreach($data['countries'] as $key => $val)
        {
            $data['countries'][$key]->marketing_countries_id = Helper::simple_encrypt($data['countries'][$key]->marketing_countries_id);
        }
//        $data['categories'] = MarketingCategory::select('marketing_categories_name', 'marketing_categories_id')->get();
        return json_encode($data);
    }

    public function getCreateTwoAdd()
    {
        return View::make('marketing_datas.create_two');
    }

    public function postStatesCategoriesAdd($id)
    {
        $id = Helper::simple_decrypt($id);
        $data['states'] = MarketingCountry::find($id)->marketing_states()->get();
        $data['categories'] = MarketingCategory::select('marketing_categories_name', 'marketing_categories_id')->get();
        return json_encode($data);
    }

    public function postStoreAdd()
    {
        $validation = Validator::make(Input::all(),MarketingData::$rules);

        if($validation->fails())
        {
            return json_encode([
                'code' => 403,
                'msg' => Config::get('constants.error_record_msg'),
                'result' => $validation->messages()
            ]);
        }

        $data = new MarketingData();
        $data->owner_name = Input::get('owner_name');
        $data->company_name = Input::get('company_name');
        $data->website = Input::get('website');
        $data->phone = Input::get('phone');
        $data->email = Input::get('email');
        $data->marketing_states_id = Input::get('marketing_states_id');
        $data->marketing_categories_id = Input::get('marketing_categories_id');
        $data->user_id = Auth::id();
        $data->leads_statuses_id = '1';
        $save = $data->save();
        if ($save) {
            return json_encode([
                'code' => 200,
                'msg' => Config::get('constants.store_record_msg'),
                'result' => null
            ]);
        } else {
            return json_encode([
                'code' => 403,
                'msg' => Config::get('constants.error_record_msg'),
                'result' => null
            ]);
        }
    }
}