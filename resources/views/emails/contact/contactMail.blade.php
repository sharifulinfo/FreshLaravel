@component('mail::message')
# Introduction

Hello Mr. {{$data['name']}}

Your Phone {{$data['phone']}}

And You said:
{{$data['message']}}

ThankS
-Shariful Islam


@endcomponent
