@extends('layout')

@section('title', 'PDF Generator')

@section('content')


<div class="container mt-5">
<img src="https://mobimg.b-cdn.net/v3/fetch/c4/c493aac67877288476b0fc52d55f55cf.jpeg" alt="" width="300">

<!-- <img src="assert('uploads/jcsCrDawH2.png) " alt="oleg" width="300"> -->

<img src="/storage/uploads/0KlcOAyneI.png" alt="oleg" width="300">

<!-- {{ route('index') }} -->

    <form class="row g-3" action="{{ route('index') }}" enctype="multipart/form-data" method="POST">

        @csrf

        <!-- <div class="valid-feedback">Good</div> -->
        <!-- <div class="invalid-feedback">Bad</div> -->
        <!-- required -->
        <!-- input -> class -> is-valid -->
        <!-- input -> class -> is-invflid -->

        <h5>Информация о выполненных услугах</h5>

        <div class="col-md-4">
            <label for="services_act_number" class="form-label">Номер акта</label>
            <input type="text" class="form-control" id="services_act_number" name="services_act_number">
        </div>

        <div class="col-md-4">
            <label for="cervices_act_date" class="form-label">Дата документа</label>
            <input type="date" class="form-control" id="cervices_act_date" name="cervices_act_date">
        </div>

        <div class="col-md-4">
            <label for="services_executor" class="form-label">Исполнитель</label>
            <input type="text" class="form-control" id="services_executor" name="services_executor">
        </div>

        <div class="col-md-4">
            <label for="services_services_name" class="form-label">Наименование услуги</label>
            <input type="text" class="form-control" id="services_services_name" name="services_services_name">
        </div>

        <div class="col-md-4">
            <label for="services_cost" class="form-label">Стоимость работ</label>
            <input type="number" class="form-control" id="services_cost" name="services_cost">
        </div>

        <div class="mb-3">
            <label for="services_file_logo" class="form-label">Загрузка логотипа компании</label>
            <input type="file" class="form-control" aria-label="logo" id="services_file_logo" name="services_file_logo">
        </div>

        <h5>Информация об исполнителе</h5>

        <div class="col-md-4">
            <label for="executor_company_name" class="form-label">Название компании исполнителя</label>
            <input type="text" class="form-control" id="executor_company_name" name="executor_company_name">
        </div>

        <div class="col-md-4">
            <label for="executor_email" class="form-label">Email исполнителя</label>
            <input type="email" class="form-control" id="executor_email" name="executor_email">
        </div>

        <div class="col-md-4">
            <label for="executor_inn" class="form-label">ИНН исполнителя</label>
            <input type="text" class="form-control" id="executor_inn" name="executor_inn">
        </div>

        <div class="col-md-4">
            <label for="executir_kpp" class="form-label">КПП исполнителя</label>
            <input type="text" class="form-control" id="executir_kpp" name="executir_kpp">
        </div>

        <div class="col-md-4">
            <label for="executor_adress" class="form-label">Адрес исполнителя</label>
            <input type="text" class="form-control" id="executor_adress" name="executor_adress">
        </div>

        <div class="col-md-4">
            <label for="executor_payment_account" class="form-label">Расчетный счет исполнителя</label>
            <input type="text" class="form-control" id="executor_payment_account" name="executor_payment_account">
        </div>

        <div class="col-md-4">
            <label for="executor_correspondent_account" class="form-label">Корр. счет исполнителя</label>
            <input type="text" class="form-control" id="executor_correspondent_account" name="executor_correspondent_account">
        </div>

        <div class="col-md-4">
            <label for="executor_bank" class="form-label">Наименование банка исполнителя</label>
            <input type="text" class="form-control" id="executor_bank" name="executor_bank">
        </div>

        <div class="col-md-4">
            <label for="executor_bank_bik" class="form-label">БИК банка исполнителя</label>
            <input type="text" class="form-control" id="executor_bank_bik" name="executor_bank_bik">
        </div>

        <div class="col-md-4">
            <label for="executor_phone" class="form-label">Телефон исполнителя</label>
            <input type="phone" class="form-control" id="executor_phone" name="executor_phone">
        </div>

        <div class="col-md-4">
            <label for="executor_name" class="form-label">ФИО дял подписи исполнителя</label>
            <input type="text" class="form-control" id="executor_name" name="executor_name">
        </div>

        <div class="mb-3">
            <label for="executor_file_signature" class="form-label">Загрузка подписи исполнителя</label>
            <input type="file" class="form-control" aria-label="logo" id="executor_file_signature" name="executor_file_signature">
        </div>

        <div class="mb-3">
            <label for="executor_file_stamp" class="form-label">Загрузка печати исполнителя</label>
            <input type="file" class="form-control" aria-label="logo" id="executor_file_stamp" name="executor_file_stamp">
        </div>

        <h5>Информация о заказчике</h5>

        <div class="col-md-4">
            <label for="customer_company_name" class="form-label">Название компании заказчика</label>
            <input type="text" class="form-control" id="customer_company_name" name="customer_company_name">
        </div>

        <div class="col-md-4">
            <label for="customer_email" class="form-label">Email заказчика</label>
            <input type="email" class="form-control" id="customer_email" name="customer_email">
        </div>

        <div class="col-md-4">
            <label for="customer_inn" class="form-label">ИНН заказчика</label>
            <input type="text" class="form-control" id="customer_inn" name="customer_inn">
        </div>

        <div class="col-md-4">
            <label for="customer_kpp" class="form-label">КПП заказчика</label>
            <input type="text" class="form-control" id="customer_kpp" name="customer_kpp">
        </div>

        <div class="col-md-4">
            <label for="customer_arderss" class="form-label">Адрес заказчика</label>
            <input type="text" class="form-control" id="customer_arderss" name="customer_arderss">
        </div>

        <div class="col-md-4">
            <label for="customer_payment_account" class="form-label">Расчетный счет заказчика</label>
            <input type="text" class="form-control" id="customer_payment_account" name="customer_payment_account">
        </div>

        <div class="col-md-4">
            <label for="customer_correspondent_account" class="form-label">Корр. счет заказчика</label>
            <input type="text" class="form-control" id="customer_correspondent_account" name="customer_correspondent_account">
        </div>

        <div class="col-md-4">
            <label for="customer_bank" class="form-label">Наименование банка заказчика</label>
            <input type="text" class="form-control" id="customer_bank" name="customer_bank">
        </div>

        <div class="col-md-4">
            <label for="customer_bank_bik" class="form-label">БИК банка заказчика</label>
            <input type="text" class="form-control" id="customer_bank_bik" name="customer_bank_bik">
        </div>

        <div class="col-md-4">
            <label for="customer_bank_phone" class="form-label">Телефон заказчика</label>
            <input type="text" class="form-control" id="customer_bank_phone" name="customer_bank_phone">
        </div>

        <div class="col-md-4">
            <label for="customer_name" class="form-label">ФИО дял подписи заказчика</label>
            <input type="text" class="form-control" id="customer_name" name="customer_name">
        </div>

        <div class="mb-3">
            <label for="customer_file_signature" class="form-label">Загрузка подписи заказчика</label>
            <input type="file" class="form-control" aria-label="logo" id="customer_file_signature" name="customer_file_signature">
        </div>

        <div class="mb-3">
            <label for="customer_file_stamp" class="form-label">Загрузка печати заказчика</label>
            <input type="file" class="form-control" aria-label="logo" id="customer_file_stamp" name="customer_file_stamp">
        </div>

        <div class="col-12 mt-5 mb-5">
            <button class="btn btn-dark" type="submit">Submit form</button>
        </div>

    </form>

</div>

@endsection