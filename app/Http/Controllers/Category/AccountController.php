<?php

namespace App\Http\Controllers\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    // ACCOUNT SETTING
    public function account_setting(){
        return view('account.account-setting');
    }
    public function account_notifications(){
        return view('account.account-notifications');
    }
    public function account_connections(){
        return view('account.account-connections');
    }
    // LOGIN AND PASS
    public function auth_login_basic(){
        return view('main.auth-login-basic');
    }
    public function auth_register_basic(){
        return view('main.auth-register-basic');
    }
    public function auth_forgot_password_basic(){
        return view('main.auth-forgot-password-basic');
    }
    // ERRO 404
    public function pages_misc_under_maintenance(){
        return view('erro.pages-misc-under-maintenance');
    }
    public function pages_misc_error(){
        return view('erro.pages-misc-error');
    }

    
    // FORM OF TABLE


    public function forms_basic_inputs(){
        return view('formofftable.forms-basic-inputs');
    }
    public function forms_input_groups(){
        return view('formofftable.forms-input-groups');
    }
    public function form_layouts_vertical(){
        return view('formlayout.form-layouts-vertical');
    }
    public function form_layouts_horizontal(){
        return view('formlayout.form-layouts-horizontal');
    }

    // Table

    public function tables_basic(){
        return view('table.tables-basic');
    }


}
