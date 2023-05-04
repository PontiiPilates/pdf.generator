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

        @php
        $services_file_logo = $names['services_file_logo'];
        $services_file_logo = asset("storage/uploads/$services_file_logo");

        $executor_file_signature = $names['executor_file_signature'];
        $executor_file_signature = asset("storage/uploads/$executor_file_signature");

        $executor_file_stamp = $names['executor_file_stamp'];
        $executor_file_stamp = asset("storage/uploads/$executor_file_stamp");

        $customer_file_signature = $names['customer_file_signature'];
        $customer_file_signature = asset("storage/uploads/$customer_file_signature");

        $customer_file_stamp = $names['customer_file_stamp'];
        $customer_file_stamp = asset("storage/uploads/$customer_file_stamp");
        @endphp

        <div class="logo" style="background-image: url({{ $services_file_logo }});"></div>

        <h6 class="text-center mt-3 pb-2" style="border-bottom: 1px solid black;">АКТ № {{ $data ?? 'Номер документа' }} от {{ $data ?? 'Дата документа' }} </h6>

        <p>Исполнитель: <b>Индивидуальный предприниматель {{ $data ?? 'ФИО ИП'}}</b></p>

        <p>Заказчик: <b>{{ $data ?? 'Название компании'}}</b></p>

        <p>{{ $data ?? 'Наименование услуги' }} — {{ $data ?? 'Сумма цифрами' }}</p>


        <p class="mt-5">Общая стоимость выполненных работ, оказанных услуг: {{ $data ?? 'Сумма полностью' }}</p>

        <p>{{ $data ?? 'Адрес почты' }}</p>

        <table style="width: 100%">
            <tr>
                <td height="24px" style="width: 10%;" colspan="4">Исполнитель: <b>ИП {{ $data ?? 'ФИО ИП' }}</b></td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" style="width: 10%;" colspan="4">Заказчик: <b>{{ $data ?? 'Название контрагента' }}</b></td>
            </tr>
            <tr>
                <td height="24px" style="width: 10%;">ИНН</td>
                <td height="24px" style="width: 10%; padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'ИНН'}}</td>
                <td height="24px" style="width: 10%;" align="center">КПП</td>
                <td height="24px" style="width: 10%; border-bottom: 1px solid black;" align="center">{{ $name ?? 'КПП'}}</td>
                <td height="24px" style="width: 10%;"></td>
                <td height="24px" style="width: 10%;">ИНН</td>
                <td height="24px" style="width: 10%; padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'ИНН контрагента'}}</td>
                <td height="24px" style="width: 10%;" align="center">КПП</td>
                <td height="24px" style="width: 10%; border-bottom: 1px solid black;" align="center">{{ $name ?? 'КПП контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Адрес</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Адрес для документов'}}</td>
                <td height="24px"></td>
                <td height="24px">Адрес</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Адрес контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Р/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Расчетный счет'}}</td>
                <td height="24px"></td>
                <td height="24px">Р/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Расчетный счет контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">К/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Корр. счет'}}</td>
                <td height="24px"></td>
                <td height="24px">К/с</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Корр. счет контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Банк</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Наименование банка и города банка'}}</td>
                <td height="24px"></td>
                <td height="24px">Банк</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Наименование банка контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">БИК</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'БИК'}}</td>
                <td height="24px"></td>
                <td height="24px">БИК</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'БИК банка контрагента'}}</td>
            </tr>
            <tr>
                <td height="24px">Телефон</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Телефон'}}</td>
                <td height="24px"></td>
                <td height="24px">Телефон</td>
                <td height="24px" colspan="3" style="padding-left: 12px; border-bottom: 1px solid black;">{{ $name ?? 'Телефон контрагента'}}а</td>
            </tr>
            <tr>
                <td height="75px" style="width: 10%; border-bottom: 1px solid black; position: relative;">
                    <div class="signature" style="background-image: url({{ $executor_file_signature }});"></div>
                    <div class="stamp" style="background-image: url({{ $executor_file_stamp }});"></div>
                </td>
                <td height="75px" style="width: 10%;"></td>
                <td height="75px" colspan="2" style="width: 10%; border-bottom: 1px solid black;" align="center" valign="bottom">{{ $name ?? 'ФИО для подписи'}}</td>
                <td height="75px" style="width: 10%;"></td>
                <td height="75px" style="width: 10%; border-bottom: 1px solid black; position: relative;">
                    <div class="signature" style="background-image: url({{ $customer_file_signature }});"></div>
                    <div class="stamp" style="background-image: url({{ $customer_file_stamp }});"></div>
                </td>
                <td height="75px" style="width: 10%;"></td>
                <td height="75px" colspan="2" style="width: 10%; border-bottom: 1px solid black;" align="center" valign="bottom">{{ $name ?? 'ФИО контрагента для подписи'}}</td>
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