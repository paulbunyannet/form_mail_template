<!doctype html>
<html>
<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Latest compiled and minified CSS -->
    @if( ! empty($data['subject']) && is_string($data['subject']))
        <title>{{ $data['subject']  }}</title>
    @elseif(! empty($data['subject']) && is_array($data['subject']) && array_key_exists('recipient', $data['subject']))
        <title>{!! $data['subject']['recipient']  !!}</title>
    @endif
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
                                <h1 class="branding">{!! $data['branding'] !!}</h1>
                            @endif
                                @if( ! empty($data['subject']) && is_string($data['subject']))
                                    <h2 class="subject">{{ $data['subject']  }}</h2>
                                @elseif(! empty($data['subject']) && is_array($data['subject']) && array_key_exists('recipient', $data['subject']))
                                    <h2 class="subject">{!! $data['subject']['recipient']  !!}</h2>
                                @endif
                            @if( ! empty($data['body']))
                                <table class="body">
                                    <tr>
                                        <td>
                                            {!! $data['body'] !!}
                                        </td>
                                    </tr>
                                </table>
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
                                <table class="footer">
                                    <tr>
                                        <td>
                                            {{ $data['footer'] }}
                                        </td>
                                    </tr>
                                </table>
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