
<?php

use Adianti\Control\TPage;
use Adianti\Widget\Template\THtmlRenderer;

class TemplateViewRepeat extends TPage 
{
    public function __construct() {
        parent::__construct();

        try
        {
            $html = new THtmlRenderer('app\resources\template-repeat.html');

            $replace = [];

            $replace[] = ['id' => 1, 'nome' => 'John Doe', 'endereco' => '123 Main St'];
            $replace[] = ['id' => 2, 'nome' => 'Jane Smith', 'endereco' => '456 Elm St'];
            $replace[] = ['id' => 3, 'nome' => 'Bob Johnson', 'endereco' => '789 Oak Ave'];
            $replace[] = ['id' => 4, 'nome' => 'Alice Brown', 'endereco' => '101 Pine St'];
            $replace[] = ['id' => 5, 'nome' => 'Charlie Davis', 'endereco' => '202 Maple St'];
            $replace[] = ['id' => 6, 'nome' => 'David Wilson', 'endereco' => '303 Cedar St'];
            $replace[] = ['id' => 7, 'nome' => 'Emma Taylor', 'endereco' => '404 Birch St'];
            $replace[] = ['id' => 8, 'nome' => 'Frank Anderson', 'endereco' => '505 Walnut St'];
            $replace[] = ['id' => 9, 'nome' => 'Grace Thomas', 'endereco' => '606 Cherry St'];
            $replace[] = ['id' => 10, 'nome' => 'Henry Moore', 'endereco' => '707 Aspen St'];
            $replace[] = ['id' => 11, 'nome' => 'Isabella Martin', 'endereco' => '808 Spruce St'];
            $replace[] = ['id' => 12, 'nome' => 'Jack Lee', 'endereco' => '909 Willow St'];
            $replace[] = ['id' => 13, 'nome' => 'Karen White', 'endereco' => '111 Poplar St'];
            $replace[] = ['id' => 14, 'nome' => 'Liam Harris', 'endereco' => '222 Cypress St'];
            $replace[] = ['id' => 15, 'nome' => 'Mia Clark', 'endereco' => '333 Redwood St'];
            $replace[] = ['id' => 16, 'nome' => 'Noah Lewis', 'endereco' => '444 Sequoia St'];
            $replace[] = ['id' => 17, 'nome' => 'Olivia Walker', 'endereco' => '555 Magnolia St'];
            $replace[] = ['id' => 18, 'nome' => 'Paul Hall', 'endereco' => '666 Palm St'];
            $replace[] = ['id' => 19, 'nome' => 'Quinn Allen', 'endereco' => '777 Olive St'];
            $replace[] = ['id' => 20, 'nome' => 'Ruby Young', 'endereco' => '888 Peach St'];
            $replace[] = ['id' => 21, 'nome' => 'Samuel King', 'endereco' => '999 Plum St'];
            $replace[] = ['id' => 22, 'nome' => 'Tina Scott', 'endereco' => '121 Apple St'];
            $replace[] = ['id' => 23, 'nome' => 'Ulysses Green', 'endereco' => '232 Pear St'];
            $replace[] = ['id' => 24, 'nome' => 'Victoria Adams', 'endereco' => '343 Banana St'];
            $replace[] = ['id' => 25, 'nome' => 'William Baker', 'endereco' => '454 Orange St'];
            $replace[] = ['id' => 26, 'nome' => 'Xavier Nelson', 'endereco' => '565 Lemon St'];
            $replace[] = ['id' => 27, 'nome' => 'Yara Carter', 'endereco' => '676 Lime St'];
            $replace[] = ['id' => 28, 'nome' => 'Zack Mitchell', 'endereco' => '787 Coconut St'];
            $replace[] = ['id' => 29, 'nome' => 'Aaron Perez', 'endereco' => '898 Mango St'];
            $replace[] = ['id' => 30, 'nome' => 'Bianca Roberts', 'endereco' => '909 Kiwi St'];

            $html->enableSection('main', []);
            $html->enableSection('details', $replace, true);

            parent::add($html);
        }
        catch (Exception $e)
        {
            throw new Exception("Error al cargar el template: " . $e->getMessage());
        }
    }
}
