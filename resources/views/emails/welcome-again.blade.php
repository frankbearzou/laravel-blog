@component('mail::message')
# Introduction

The body of your message.

## Header

- This is a thing.
- This is another thing.
- Yet another thing.
- The final thing.

@component('mail::button', ['url' => 'https://www.google.com'])
Button Text
@endcomponent

@component('mail::panel', ['url' => 'http://www.baidu.com'])
Panel area.
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
