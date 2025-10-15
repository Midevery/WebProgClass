<?php

namespace App\Models;
use App\Models\Portfolio;

class PortfolioFactory{
    private $title =[
        "Website E-commerce",
        "Mobile app Development",
        "AI Sentiment Classification",
        "AI Agent"
    ];

    private $description =[
        "Sistem ecommerce dengan pembayaran terintegrasi payment gateaway",
        "Aplikasi mobile native dengan performa optimal",
        "Aplikasi analisa sentimen sosial media",
        "Pipeline agentic ai menggunakan hosted llm
        "
    ];

    public function create(){
        $data = [];
        for($i = 0; $i<4; $i++){
            $data[] = new Portfolio(
                $i+1,
                $this->title[$i],
                $this->description[$i]
            ); 
        }
        return $data;
    }

}
