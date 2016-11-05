# Laravel OCR

A wrapper for gocr for fast and easy use with Laravel.

![alt text][phone] => 9504990559

[phone]: https://raw.githubusercontent.com/yassine-khachlek/laravel-ocr/master/src/examples/images/number.png "number.png"

### Installation

Install wia composer:

```
composer require yk/laravel-ocr
```

And add the service provider in config/app.php:

```php
Yk\LaravelOcr\OcrProvider::class,
```

Then register Facade class alias:

```php
'Ocr' => Yk\LaravelOcr\Facades\Ocr::class,
```

### Example:

find the text from an image using its full path

```php
Ocr::recognize('/home/voidmain/Desktop/phone.png')
```

## License

### GPLv2

Copyright (c) 2016 Yassine Khachlek <yassine.khachlek@gmail.com>

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.