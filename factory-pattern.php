<?php 

   class MobileOptions{
       var $model="Redmi Note 8 Pro";
       var $color="Green";
   }
   class Mobile{
       private $color;
       private $model;

       public function __construct(MobileOptions $option){
            $this->model = $option->model;
            $this->color = $option->color;
       }

       public function info(){
           return "This is $this->model model in $this->color color";
       }

   }
   class MobileCompany{

        private $option;
        public function __construct($model,$color){
            $option = new MobileOptions();
            $option->model = $model;
            $option->color = $color;
            $this->option = $option;
        }
        public function build(){
            return new Mobile($this->option);
        }
   }
   $company = new MobileCompany("Huawei Y7","Red");
   $phone = $company->build();

   echo $phone->info();