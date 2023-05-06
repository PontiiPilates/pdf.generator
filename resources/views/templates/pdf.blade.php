<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PDF Template</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

    <div class="pt-5">
        {{ asset('public/storage/uploads/' . $services_file_logo) }}

        <div class="logo" style="background-image: url({{ asset('public/storage/uploads/' . $services_file_logo) }});"></div>

        <h6 class="text-center mt-3 pb-2" style="border-bottom: 1px solid black;">АКТ № {{ $validated['services_act_number'] ?? 'Номер документа' }} от {{ $validated['cervices_act_date'] ?? 'Дата документа' }} </h6>

        <p>Исполнитель: <b>Индивидуальный предприниматель {{ $validated['services_executor'] ?? 'ФИО ИП'}}</b></p>

        <p>Заказчик: <b>{{ $validated['customer_company_name'] ?? 'Название компании'}}</b></p>

        <p>{{ $validated['services_services_name'] ?? 'Наименование услуги' }} — {{ $validated[''] ?? 'Сумма цифрами' }}</p>


        <p class="mt-5">Общая стоимость выполненных работ, оказанных услуг: {{ $validated['services_cost'] ?? 'Сумма полностью' }}</p>

        <p>{{ $validated['executor_adress'] ?? 'Адрес почты' }}</p>

        <table style="width: 100%">
            <tr>
                <td height="24px" style="width: 10%;" colspan="4">Исполнитель: <b>ИП {{ $validated['executor_company_name'] ?? 'ФИО ИП' }}</b></td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" style="width: 10%;" colspan="4">Заказчик: <b>{{ $validated['customer_company_name'] ?? 'Название контрагента' }}</b></td>
            </tr>
            <tr>
                <td height="24px" style="width: 10%;">ИНН</td>
                <td height="24px" style="width: 10%; padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['executor_inn'] ?? 'ИНН'}}</td>
                <td height="24px" style="width: 10%;" align="center">КПП</td>
                <td height="24px" style="width: 10%; border-bottom: 1px solid black;" align="center">{{ $validated['executir_kpp'] ?? 'КПП'}}</td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" style="width: 10%;">ИНН</td>
                <td height="24px" style="width: 10%; padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['customer_inn'] ?? 'ИНН контрагента'}}</td>
                <td height="24px" style="width: 10%;" align="center">КПП</td>
                <td height="24px" style="width: 10%; border-bottom: 1px solid black;" align="center">{{ $validated['customer_kpp'] ?? 'КПП контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Адрес</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['executor_adress'] ?? 'Адрес для документов'}}</td>
                <td height="24px"></td>
                <td height="24px">Адрес</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['customer_arderss'] ?? 'Адрес контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Р/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['executor_payment_account'] ?? 'Расчетный счет'}}</td>
                <td height="24px"></td>
                <td height="24px">Р/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['customer_payment_account'] ?? 'Расчетный счет контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">К/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['executor_correspondent_account'] ?? 'Корр. счет'}}</td>
                <td height="24px"></td>
                <td height="24px">К/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['customer_correspondent_account'] ?? 'Корр. счет контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Банк</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['executor_bank'] ?? 'Наименование банка и города банка'}}</td>
                <td height="24px"></td>
                <td height="24px">Банк</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['customer_bank'] ?? 'Наименование банка контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">БИК</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['executor_bank_bik'] ?? 'БИК'}}</td>
                <td height="24px"></td>
                <td height="24px">БИК</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['customer_bank_bik'] ?? 'БИК банка контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Телефон</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['executor_phone'] ?? 'Телефон'}}</td>
                <td height="24px"></td>
                <td height="24px">Телефон</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $validated['customer_bank_phone'] ?? 'Телефон контрагента'}}а</td>
            </tr>
            <tr>
                <td height="75px" style="width: 10%; border-bottom: 1px solid black; position: relative;">
                    <div class="signature" style="background-image: url({{ 'public/storage/uploads/' . $executor_file_signature }});"></div>
                    <div class="stamp" style="background-image: url({{ 'public/storage/uploads/' . $executor_file_stamp }});"></div>
                </td>
                <td height="75px" style="width: 10%;"></td>
                <td height="75px" colspan="2" style="width: 10%; border-bottom: 1px solid black;" align="center" valign="bottom">{{ $validated['executor_name'] ?? 'ФИО для подписи'}}</td>
                <td height="75px" style="width: 10%;"></td>
                <td height="75px" style="width: 10%; border-bottom: 1px solid black; position: relative;">
                    <div class="signature" style="background-image: url({{ 'public/storage/uploads/' . $customer_file_signature }});"></div>
                    <div class="stamp" style="background-image: url({{ 'public/storage/uploads/' . $customer_file_stamp }});"></div>
                </td>
                <td height="75px" style="width: 10%;"></td>
                <td height="75px" colspan="2" style="width: 10%; border-bottom: 1px solid black;" align="center" valign="bottom">{{ $validated['customer_name'] ?? 'ФИО контрагента для подписи'}}</td>
            </tr>
            <tr>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" colspan="2" style="width: 10%;" align="center"><small>расшифровка подписи</small></td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" colspan="2" style="width: 10%;" align="center"><small>расшифровка подписи</small></td>
            </tr>
        </table>

    </div>

    <style>
        div {
            font-size: 13px;
        }

        .logo {
            height: 100px;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: top right;
        }

        .signature {
            position: absolute;
            z-index: 1;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center center;
            width: 100px;
            height: 100px;
            top: 20px;
        }

        .stamp {
            position: absolute;
            z-index: 2;
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center center;
            width: 150px;
            height: 150px;
            top: 0px;
            left: -20px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>