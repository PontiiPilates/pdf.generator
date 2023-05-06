@extends('layout')

@section('title', 'PDF Generator')

@section('content')



    <div class="container mt-5">
        
        @if( session('message') )
            <div class="alert alert-{{ session('message.type') }} alert-dismissible fade show d-flex align-items-center" role="alert">
                @if( session('message.type') == 'success' )
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:" style="width: 16px; height: 16px; fill: #75b798;"><use xlink:href="#check-circle-fill"/></svg>
                @elseif( session('message.type') == 'danger' )
                    <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:" style="width: 16px; height: 16px; fill: #ea868f;"><use xlink:href="#exclamation-triangle-fill"/></svg>
                @endif
                <strong>{{ session('message.text') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form class="row g-3" action="{{ route('sendGeneral') }}" enctype="multipart/form-data" method="POST">

            @csrf

            <h5>Информация о выполненных услугах</h5>

            <div class="col-md-4">
                <label for="services_act_number" class="form-label">Номер акта <span class="required">*</span></label>
                <input class="@error('services_act_number') is-invalid @enderror form-control" type="text" id="services_act_number" name="services_act_number" value="{{ old('services_act_number') }}">
                @error('services_act_number')
                    <div id="services_act_number" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="cervices_act_date" class="form-label">Дата документа <span class="required">*</span></label>
                <input class="@error('cervices_act_date') is-invalid @enderror form-control" type="date" id="cervices_act_date" name="cervices_act_date" value="{{ old('cervices_act_date') }}">
                @error('cervices_act_date')
                    <div id="cervices_act_date" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="services_executor" class="form-label">Исполнитель <span class="required">*</span></label>
                <input class="@error('services_executor') is-invalid @enderror form-control" type="text" id="services_executor" name="services_executor" value="{{ old('services_executor') }}">
                @error('services_executor')
                    <div id="services_executor" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="services_services_name" class="form-label">Наименование услуги <span class="required">*</span></label>
                <input class="@error('services_services_name') is-invalid @enderror form-control" type="text" id="services_services_name" name="services_services_name" value="{{ old('services_services_name') }}">
                @error('services_services_name')
                    <div id="services_services_name" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-md-4">
                <label for="services_cost" class="form-label">Стоимость работ <span class="required">*</span></label>
                <input class="@error('services_cost') is-invalid @enderror form-control" type="number" id="services_cost" name="services_cost" value="{{ old('services_cost') }}">
                @error('services_cost')
                    <div id="services_cost" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="services_file_logo" class="form-label">Загрузка логотипа компании <span class="required">*</span></label>
                <input class="@error('services_file_logo') is-invalid @enderror form-control" type="file" aria-label="logo" id="services_file_logo" name="services_file_logo">
                @error('services_file_logo')
                    <div id="services_file_logo" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <h5>Информация об исполнителе</h5>
            
            <div class="col-md-4">
                <label for="executor_company_name" class="form-label">Название компании исполнителя</label>
                <input class="@error('executor_company_name') is-invalid @enderror form-control" type="text" id="executor_company_name" name="executor_company_name">
                @error('executor_company_name')
                    <div id="executor_company_name" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_email" class="form-label">Email исполнителя <span class="required">*</span></label>
                <input class="@error('executor_email') is-invalid @enderror form-control" type="email" id="executor_email" name="executor_email">
                @error('executor_email')
                    <div id="executor_email" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_inn" class="form-label">ИНН исполнителя</label>
                <input class="@error('executor_inn') is-invalid @enderror form-control" type="text" id="executor_inn" name="executor_inn">
                @error('executor_inn')
                    <div id="executor_inn" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executir_kpp" class="form-label">КПП исполнителя</label>
                <input class="@error('executir_kpp') is-invalid @enderror form-control" type="text" id="executir_kpp" name="executir_kpp">
                @error('executir_kpp')
                    <div id="executir_kpp" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_adress" class="form-label">Адрес исполнителя</label>
                <input class="@error('executor_adress') is-invalid @enderror form-control" type="text" id="executor_adress" name="executor_adress">
                @error('executor_adress')
                    <div id="executor_adress" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_payment_account" class="form-label">Расчетный счет исполнителя</label>
                <input class="@error('executor_payment_account') is-invalid @enderror form-control" type="text" id="executor_payment_account" name="executor_payment_account">
                @error('executor_payment_account')
                    <div id="executor_payment_account" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_correspondent_account" class="form-label">Корр. счет исполнителя</label>
                <input class="@error('executor_correspondent_account') is-invalid @enderror form-control" type="text" id="executor_correspondent_account" name="executor_correspondent_account">
                @error('executor_correspondent_account')
                    <div id="executor_correspondent_account" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_bank" class="form-label">Наименование банка исполнителя</label>
                <input class="@error('executor_bank') is-invalid @enderror form-control" type="text" id="executor_bank" name="executor_bank">
                @error('executor_bank')
                    <div id="executor_bank" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_bank_bik" class="form-label">БИК банка исполнителя</label>
                <input class="@error('executor_bank_bik') is-invalid @enderror form-control" type="text" id="executor_bank_bik" name="executor_bank_bik">
                @error('executor_bank_bik')
                    <div id="executor_bank_bik" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_phone" class="form-label">Телефон исполнителя</label>
                <input class="@error('executor_phone') is-invalid @enderror form-control" type="phone" id="executor_phone" name="executor_phone">
                @error('executor_phone')
                    <div id="executor_phone" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="executor_name" class="form-label">ФИО дял подписи исполнителя</label>
                <input class="@error('executor_name') is-invalid @enderror form-control" type="text" id="executor_name" name="executor_name">
                @error('executor_name')
                    <div id="executor_name" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="executor_file_signature" class="form-label">Загрузка подписи исполнителя <span class="required">*</span></label>
                <input class="@error('executor_file_signature') is-invalid @enderror form-control" type="file" aria-label="logo" id="executor_file_signature" name="executor_file_signature">
                @error('executor_file_signature')
                    <div id="executor_file_signature" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="executor_file_stamp" class="form-label">Загрузка печати исполнителя <span class="required">*</span></label>
                <input class="@error('executor_file_stamp') is-invalid @enderror form-control" type="file" aria-label="logo" id="executor_file_stamp" name="executor_file_stamp">
                @error('executor_file_stamp')
                    <div id="executor_file_stamp" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <h5>Информация о заказчике</h5>
            
            <div class="col-md-4">
                <label for="customer_company_name" class="form-label">Название компании заказчика</label>
                <input class="@error('customer_company_name') is-invalid @enderror form-control" type="text" id="customer_company_name" name="customer_company_name">
                @error('customer_company_name')
                    <div id="customer_company_name" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_email" class="form-label">Email заказчика</label>
                <input class="@error('customer_email') is-invalid @enderror form-control" type="email" id="customer_email" name="customer_email">
                @error('customer_email')
                    <div id="customer_email" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_inn" class="form-label">ИНН заказчика</label>
                <input class="@error('customer_inn') is-invalid @enderror form-control" type="text" id="customer_inn" name="customer_inn">
                @error('customer_inn')
                    <div id="customer_inn" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_kpp" class="form-label">КПП заказчика</label>
                <input class="@error('customer_kpp') is-invalid @enderror form-control" type="text" id="customer_kpp" name="customer_kpp">
                @error('customer_kpp')
                    <div id="customer_kpp" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_arderss" class="form-label">Адрес заказчика</label>
                <input class="@error('customer_arderss') is-invalid @enderror form-control" type="text" id="customer_arderss" name="customer_arderss">
                @error('customer_arderss')
                    <div id="customer_arderss" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_payment_account" class="form-label">Расчетный счет заказчика</label>
                <input class="@error('customer_payment_account') is-invalid @enderror form-control" type="text" id="customer_payment_account" name="customer_payment_account">
                @error('customer_payment_account')
                    <div id="customer_payment_account" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_correspondent_account" class="form-label">Корр. счет заказчика</label>
                <input class="@error('customer_correspondent_account') is-invalid @enderror form-control" type="text" id="customer_correspondent_account" name="customer_correspondent_account">
                @error('customer_correspondent_account')
                    <div id="customer_correspondent_account" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_bank" class="form-label">Наименование банка заказчика</label>
                <input class="@error('customer_bank') is-invalid @enderror form-control" type="text" id="customer_bank" name="customer_bank">
                @error('customer_bank')
                    <div id="customer_bank" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_bank_bik" class="form-label">БИК банка заказчика</label>
                <input class="@error('customer_bank_bik') is-invalid @enderror form-control" type="text" id="customer_bank_bik" name="customer_bank_bik">
                @error('customer_bank_bik')
                    <div id="customer_bank_bik" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_bank_phone" class="form-label">Телефон заказчика</label>
                <input class="@error('customer_bank_phone') is-invalid @enderror form-control" type="text" id="customer_bank_phone" name="customer_bank_phone">
                @error('customer_bank_phone')
                    <div id="customer_bank_phone" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="col-md-4">
                <label for="customer_name" class="form-label">ФИО дял подписи заказчика</label>
                <input class="@error('customer_name') is-invalid @enderror form-control" type="text" id="customer_name" name="customer_name">
                @error('customer_name')
                    <div id="customer_name" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="customer_file_signature" class="form-label">Загрузка подписи заказчика <span class="required">*</span></label>
                <input class="@error('customer_file_signature') is-invalid @enderror form-control" type="file" aria-label="logo" id="customer_file_signature" name="customer_file_signature">
                @error('customer_file_signature')
                    <div id="customer_file_signature" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="customer_file_stamp" class="form-label">Загрузка печати заказчика <span class="required">*</span></label>
                <input class="@error('customer_file_stamp') is-invalid @enderror form-control" type="file" aria-label="logo" id="customer_file_stamp" name="customer_file_stamp">
                @error('customer_file_stamp')
                    <div id="customer_file_stamp" class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 mt-5 mb-5">
                <button class="btn btn-dark" type="submit">Submit form</button>
            </div>

        </form>

    </div>

    <style>
        .required {
            color: red;
        }
    </style>

@endsection
