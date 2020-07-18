<?php 
    class MobileDetails{
        var $model = "Redmi note 8";
        var $color = "Red";
    }
    class Mobile{
        private $model;
        private $color;

        public function __construct(MobileDetails $detail){
            $this->model = $detail->model;
            $this->color = $detail->color;
        }

        public function info(){
            return "This $this->model is $this->color";

        }

    }
    abstract class MobileCompany{
        abstract public function build();
    }

    class Xiaomi extends MobileCompany{

        private $detail;

        public function __construct($model,$color){
            $detail = new MobileDetails();
            $detail->model = $model;
            $detail->color = $color;
            $this->detail = $detail;
        }
        public function build(){
            return new Mobile($this->detail);
        }
    }
    
    class Vivo extends MobileCompany{
        private $detail;
        
        public function __construct($model,$color){
            $detail = new MobileDetails();
            $detail->model = $model;
            $detail->color = $color;

            $this->detail = $detail;
        }
        public function build(){
            return new Mobile($this->detail);
        }
    }

    $model = "Vivo";

    //Deciding which factory to use
    if($model == "Xiaomi"){
        $company = new Xiaomi("Mi 10", "Blue");
    }
    elseif($model == "Vivo"){
        $company = new Vivo("Y80","Red");
    }

    $phone = $company->build();
    echo $phone->info();