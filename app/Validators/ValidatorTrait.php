<?php

declare(strict_types=1);

namespace App\Validators;

use Illuminate\Support\Facades\Validator;

/*
 * Class CustomValidator
 * @package App\Validators
 */
trait ValidatorTrait
{
    /**
     * Validator
     */
    public $validator;

    /**
     * Validated data
     *
     * @var array
     */
    public $formData = [];

    /**
     * Indicator validator status
     *
     * @var bool
     */
    public $isFailed = false;

    /**
     * Validator error message
     *
     * @var
     */
    public $message;

    /**
     * Set validator and run validation
     *
     * @param $validator
     * @return self
     */
    public function setValidator($validator): self
    {
        $this->validator = $validator;
        return $this;
    }

    /**
     * Setter formData
     *
     * @param $data
     * @return $this
     */
    public function setFormData($data): self
    {
        $this->formData = $data;
        return $this;
    }

    /**
     * Getter formData
     *
     * @return array
     */
    public function getFormData(): array
    {
        return $this->formData ?: request()->all();
    }

    /**
     * Run Validation action
     */
    private function _validate(): void
    {
        $validator = Validator::make(
            $this->getFormData(),
            $this->validator->rules(),
            $this->validator->messages()
        );

        $this->isFailed = $validator->fails();
        $this->message  = $validator->errors();
    }

    /**
     * Run validation action and check whatever validation is failed
     *
     * @return void
     */
    public function runValidation()
    {
        $this->_validate();
    }

    public function validatorFails()
    {
        return $this->isFailed;
    }
}
