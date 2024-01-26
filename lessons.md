# New Lessons Learnt

## Loop in a table

Use the

```php
@forelse($collection as $item)
...
@empty
...
@endforelse
```

directive to either loop through an array/collection or display something else when empty

## Use of the `$loop` variable

Has useful attributes that can be accessed when in a `foreach` loop such as `$loop->iteration` and `$loop->first`

More info [here](https://laravel.com/docs/10.x/blade#loops)

## Passing Global Variables

This is done at the `boot()` method in the AppServiceProvider file

Great reference article from Laravel Daily found [here](https://laraveldaily.com/post/pass-global-variables-blade-view-share-composer)

## Extending layouts

Done using `@extends('layoutName')` Blade directive. Use `@section('sectionName') ... @endsection` to place content within a section of that layout
