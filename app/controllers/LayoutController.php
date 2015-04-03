<?php

class LayoutController extends \BaseController {

    public function masterView()
    {
        return View::make('layout.master');
    }
    public function appView()
    {
        return View::make('layout.app');
    }

    public function headerView()
    {
//        $data['header_menu'] = Module::all();
//        $newArray = [];
//        $this->display_children(0, 1,$newArray);die;
        return View::make('layout.header');
    }


    public function display_children($parent, $level,$newArray)
    {
        $result = DB::select(DB::raw("SELECT a.module_id, a.module_name, a.module_url, Deriv1.Count FROM `modules` a LEFT OUTER JOIN (SELECT parent_id, COUNT(*) AS Count FROM `modules` GROUP BY parent_id) Deriv1 ON a.module_id = Deriv1.parent_id WHERE a.parent_id=" . $parent));

        echo "<ul>";
        foreach($result as $key => $row)
        {
            if ($row->Count > 0) {
                $newArray[] = '';
                echo "<li><a href='" . $row->module_url. "'>" . $row->module_name . "</a>";
                $this->display_children($row->module_id, $level + 1,$newArray);
                echo "</li>";
            } elseif ($row->Count == 0) {
                echo "<li><a href='" . $row->module_url . "'>" . $row->module_name. "</a></li>";
            }
            else;
        }
        echo "</ul>";
    }

    public function asideView()
    {
        return View::make('layout.aside');
    }

    public function navView()
    {
        return View::make('layout.nav');
    }


}