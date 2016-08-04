<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Latest compiled and minified CSS -->
    <title>{{ $data['subject'] }}</title>
    @include('pbc_form_mail_template::partials.email-css')
</head>

<body bgcolor="#f6f6f6">

<!-- body -->
<table class="body-wrap" bgcolor="#f6f6f6">
    <tr>
        <td></td>
        <td class="container" bgcolor="#FFFFFF">
            <!-- content -->
            <div class="content">
                <table>
                    <tr>
                        <td>
                            @if( ! empty($data['branding']))
                                <h1>{!! $data['branding'] !!}</h1>
                            @endif
                            <h2>{{ $data['subject'] }}</h2>
                            @if( ! empty($data['body']))
                                {!! $data['body'] !!}
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <!-- /content -->

        </td>
        <td></td>
    </tr>
</table>
<!-- /body -->

<!-- footer -->
<table class="footer-wrap">
    <tr>
        <td></td>
        <td class="container">
            <!-- content -->
            <div class="content">
                <table>
                    <tr>
                        <td align="center">
                            @if( ! empty($data['footer']))
                                {{ $data['footer'] }}
                            @endif
                        </td>
                    </tr>
                </table>
            </div>
            <!-- /content -->
        </td>
        <td></td>
    </tr>
</table>
<!-- /footer -->
</body>
</html>