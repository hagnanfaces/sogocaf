{{--{{ $data['message'] }}--}}

Vous avez reçu une message de : {{ $data['name'] }}
<p>
    Nom: {{ $data['name'] }}
</p>
<p>
    Email: {{ $data['email'] }}
</p>
@isset($data['phone'])
    <p>
        Phone: {{ $data['phone'] }}
    </p>
@endisset
<p>
    Message: {{ $data['message'] }}
</p>
