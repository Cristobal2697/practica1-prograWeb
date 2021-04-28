<?php
// file: Publishers.php

class Publisher extends Model
{

    static $publishers = [
        [
            'id' => 1,
            'publisher' => 'John Wiley & Sons',
            'country' => 'United States',
            'founded' => '1807',
            'genere' => 'Academic',
            'book_id1' => '1',
            'book_id2' => '2',
            'book_title1' => 'Operating System Concepts',
            'book_title2' => 'Database System Concepts'
        ],
        [
            'id' => 2,
            'publisher' => 'Pearson Education',
            'country' => 'United Kingdom',
            'founded' => '1844',
            'genere' => 'Education',
            'book_id1' => '3',
            'book_id2' => '4',
            'book_title1' => 'Computer Networks',
            'book_title2' => 'Modern Operating Systems'
        ]
    ];

    public static function all()
    {
        return self::$publishers;
    }

    public static function find($id)
    {
        foreach (self::$publishers as $key => $editor)
            if ($editor['id'] == $id) return $editor;
        return [];
    }
}
