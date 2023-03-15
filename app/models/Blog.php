<?php

class Blog {
    use Model;
    protected $table = 'blog';

    protected $allowedColumns = [
        'blogName'
    ];
}