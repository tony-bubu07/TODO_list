<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

use App\Models\Task;
use Illuminate\Validation\Rule;

/** EditTask クラスは CreateTask クラスを継承
 * タスクの作成と編集では状態欄の有無が異なるだけでタイトルと期限日は同一だから重複を避けるために継承を用いる 
 */ 
class EditTask extends CreateTask
{
    // /**
    //  * Determine if the user is authorized to make this request.
    //  *
    //  * @return bool
    //  */
    // public function authorize()
    // {
    //     return false;
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = parent::rules();

        // Rule::in() メソッド ＝ 与えられた配列内の値のいずれかと一致するかどうかを検証するバリデーションルール
        $status_rule = Rule::in(array_keys(Task::STATUS));

        return $rule + [
            // ↓ 'status' => 'required|in(1, 2, 3)', と同じ意味
            'status' => 'required|' . $status_rule,
        ];
    }

    public function attributes()
    {
        // 親クラス CreateTask の attributes メソッドを $attributes として用いる
        $attributes = parent::attributes();

        return $attributes + [
            'status' => '状態',
        ];
    }

    public function messages()
    {
        $messages = parent::messages();

        $status_labels = array_map(function($item) {
            return $item['label'];
        }, Task::STATUS);

        $status_labels = implode('、', $status_labels);

        return $messages + [
            'status.in' => ':attribute には ' . $status_labels. ' のいずれかを指定してください。',
        ];
    }
}
