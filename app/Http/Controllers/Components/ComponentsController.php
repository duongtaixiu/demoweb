<?php

namespace App\Http\Controllers\Components;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComponentsController extends Controller
{
    public function cardsbasic(){
        return view('components.cards-basic');
    }
    public function ui_accordion(){
        return view('components.ui-accordion');
    }
    public function ui_alerts(){
        return view('components.ui-alerts');
    }
    public function ui_typography(){
        return view('components.ui-typography');
    }
    public function ui_badges(){
        return view('components.ui-badges');
    }
    public function ui_buttons(){
        return view('components.ui-buttons');
    }
    public function ui_carousel(){
        return view('components.ui-carousel');
    }
    public function ui_collapse(){
        return view('components.ui-collapse');
    }
    public function ui_dropdowns(){
        return view('components.ui-dropdowns');
    }
    public function ui_footer(){
        return view('components.ui_footer');
    }
    public function ui_list_groups(){
        return view('components.ui_list_groups');
    }
    public function ui_modals(){
        return view('components.ui-modals');
    }
    public function ui_navbar(){
        return view('components.ui-navbar');
    }
    public function ui_offcanvas(){
        return view('components.ui-offcanvas');
    }
    public function ui_pagination_breadcrumbs(){
        return view('components.ui-pagination-breadcrumbs');
    }
    public function ui_progress(){
        return view('components.ui-progress');
    }
    public function ui_spinners(){
        return view('components.ui-spinners');
    }
    public function ui_tabs_pills(){
        return view('components.ui-tabs-pills');
    }
    public function ui_toasts(){
        return view('components.ui-toasts');
    }
    public function ui_tooltips_popovers(){
        return view('components.ui-tooltips-popovers');
    }
    public function extended_ui_perfect_scrollbar(){
        return view('components.extended-ui-perfect-scrollbar');
    }
    public function extended_ui_text_divider(){
        return view('components.extended-ui-text-divider'); 
    }
    public function icons_boxicons(){
        return view('components.icons-boxicons');
    }



}