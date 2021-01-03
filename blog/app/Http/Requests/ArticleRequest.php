<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class ArticleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'keyWord' => 'string',
            'orderBy' => 'string',
            'orderByType' => 'string',
            'tagId' => 'int',
            'page' => 'int',
            'limit' => 'int',
        ];
    }
    public function messages()
    {
        return [
            'tagId.int' => 'tagId必须为int类型',
            'keyWord.string' => 'keyWord必须为string类型',
            'orderBy.string' => 'orderBy必须为string类型',
            'orderByType.string' => 'orderByType必须为string类型',
            'page.int' => 'page必须为int类型',
            'limit.int' => 'limit必须为int类型',
        ];
    }

    /**
     * 重写父类方法 否则会重定向
     *
     * @param Validator $validator
     */
    protected function failedValidation(Validator $validator)
    {
        $error= $validator->errors()->all();

        throw new HttpResponseException(response()->json(
            [
                'code' => 200,
                'errors' => $error,
            ]
        ));
    }
}
