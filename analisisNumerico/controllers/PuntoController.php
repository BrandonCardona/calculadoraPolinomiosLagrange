<?php 

class puntoController{

    public function __construct()
    {
        require_once "models/Punto.php";
    }

    public function index()
    {
        $puntos = new Punto();
        $data["titulo"] = "CALCULADORA DE POLINOMIOS INTERPOLANTES DE LAGRANGE";
        $data["puntos"] = $puntos->listar();
        // Cargar la vista
        require_once "views/puntos/index.php";
    }

    public function insert()
    {
        $data['titulo'] = "CALCULADORA DE POLINOMIOS INTERPOLANTES DE LAGRANGE";
        require_once "views/puntos/insert.php";
    }

    public function store()
    {
        // recibir los datos del formulario
        $x= $_POST['puntoX'];
        $y = $_POST['puntoY'];

        // Guardar el registro
        $punto = new Punto();
        $punto->insert($x, $y);

        // Enviar a la vista index
        $this->index();
    }

    public function delete(){

        $puntos = new Punto();
        $puntos->delete();
        $this->index();
    }

    public function separarPuntosxy($arregloPuntos){

        foreach($arregloPuntos as $punto){
            $x[] = $punto['x'];
            $y[] = $punto['y'];
        }
        return array ($x,$y);
    }

    public function separarPuntos($arregloPuntos){

        foreach($arregloPuntos as $punto){
            $xy[] = array($punto['x'],$punto['y']);
        }
        return $xy;
    }

    public function lagrange_interpolate1($points) {
        $n = count($points);
        $result = "";
        for ($i = 0; $i < $n; $i++) {
            $term = $points[$i][1];
            $numerator = "";
            $denominator = "";
            for ($j = 0; $j < $n; $j++) {
                if ($j != $i) {
                    if ($numerator !== "") {
                        $numerator .= " * ";
                        $denominator .= " * ";
                    }
                    $numerator .= "(x - " . $points[$j][0] . ")";
                    $denominator .= "(" . $points[$i][0] . " - " . $points[$j][0] . ")";
                }
            }
            $term .= " * (" . $numerator . ") / (" . $denominator . ")";
            if ($result !== "") {
                $result .= " + ";
            }
            $result .= $term;
        }
        return $result;
    }

    public function lagrange_interpolate2($points) {
        $n = count($points);
        $result = "";
        for ($i = 0; $i < $n; $i++) {
            $term = $points[$i][1];
            $numerator = "";
            $denominator = "";
            $acumulador=1;
            for ($j = 0; $j < $n; $j++) {
                if ($j != $i) {
                    if ($numerator !== "") {
                        $numerator .= " * ";
                        $denominator .= " * ";
                    }
                    $numerator .= "(x - " . $points[$j][0] . ")";
                    $denominator1=($points[$i][0]  - $points[$j][0]);
                    $acumulador*=$denominator1;
                }
                
            }
            $cociente=$term/$acumulador;
            $term = "".$cociente." * (" . $numerator . ") ";
            if ($result !== "") {
                $result .= " + ";
            }
            $result .= $term;
        }
        return $result;
    }
    
    public function lagrange_interpolation($x, $y, $value) {
        $n = count($x);
        $result = 0;
        
        for ($i = 0; $i < $n; $i++) {
            $term = $y[$i];
            
            for ($j = 0; $j < $n; $j++) {
                if ($i != $j) {
                    $term *= ($value - $x[$j]) / ($x[$i] - $x[$j]);
                }
            }
            
            $result += $term;
        }
        
        return $result;
    }

    public function calcularModelo(){

        $data['titulo'] = 'MODELO DEL POLINOMIO';

        $puntos = new Punto();
        $arregloPuntos = $puntos->listar();
        if(count($arregloPuntos) <= 3){
            $data['modelo'] = $this->lagrange_interpolate2($this->separarPuntos($arregloPuntos));
        }else{
            $data['modelo'] = $this->lagrange_interpolate1($this->separarPuntos($arregloPuntos));
        }
        //echo $this->lagrange_interpolation($this->separarPuntos()[0],$this->separarPuntos()[1],83);
        require_once "views/puntos/modelo.php";
    }

    public function calcularValor(){
        $puntos = new Punto();
        $arregloPuntos = $puntos->listar();
        $data['valor'] = $_POST['valor'];
        $data['valorInterpolado'] = $this->lagrange_interpolation($this->separarPuntosxy($arregloPuntos)[0],$this->separarPuntosxy($arregloPuntos)[1],$data['valor']);
        
        $data['titulo'] = 'MODELO DEL POLINOMIO';
        if(count($arregloPuntos) <= 3){
            $data['modelo'] = $this->lagrange_interpolate2($this->separarPuntos($arregloPuntos));
        }else{
            $data['modelo'] = $this->lagrange_interpolate1($this->separarPuntos($arregloPuntos));
        }
    
        require_once "views/puntos/modelo.php";
    }
}

?>