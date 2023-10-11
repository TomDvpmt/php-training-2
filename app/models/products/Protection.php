<?php

namespace PhpTraining2\models\products;

use PhpTraining2\models\Product;
use PhpTraining2\models\ProductInterface;

final class Protection extends Product implements ProductInterface {

    private const SELECT_OPTIONS = [
        "questions" => [
            "type" => "What kind of protection does this beauty provide?",
            "resistance" => "How resistant is it?"
        ],
        "answers" => [
            "type" => [
                "helmet",
                "armor",
                "clothing",
                "plot armor",
                "hard to say"
            ],
            "resistance" => [
                "the dangerously weak kind",
                "medium",
                "it's an impenetrable wall"
            ]
        ]
    ];
    
    public function __construct(
        protected array $genericData = [],
        protected array $specificData = ["type" => "hard to say", "resistance" => "medium"])
    {
        parent::__construct($genericData);
        $this->table = "protection";
        $this->genericData["category"] = "protection";
    }

    public function getSelectOptions(): array {
        return self::SELECT_OPTIONS;
    }

}