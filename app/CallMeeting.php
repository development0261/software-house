<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CallMeeting extends Model
{
    const NAME = 'name';
    const EMAIL = 'email';
    const CELLNUMBER = 'cellnumber';
    const LOGO = 'logo';
    const NOTE = 'note';
    const DATE = 'date';
    const TIME = 'time';

    const RULES = [
            self::NAME => 'required',
            self::EMAIL => 'required|email',
            self::CELLNUMBER => 'required|numeric',
            self::LOGO => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,gif,svg',
            self::DATE => 'required|date',
            self::TIME => 'required'
        ];

    protected $fillable = [
        self::NAME, self::EMAIL, self::CELLNUMBER, self::LOGO, self::NOTE, self::DATE, self::TIME
    ];

    /*public function rules()
    {
        return [
            self::NAME => 'required',
            self::EMAIL => 'required|email',
            self::CELLNUMBER => 'required|numeric',
            self::LOGO => 'required|mimes:doc,docx,jpg,jpeg,png,pdf,gif,svg',
            self::DATE => 'required|date',
            self::TIME => 'required'
        ];
    }*/
}
