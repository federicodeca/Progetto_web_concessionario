<?php
class CFrontController{
  

    public function runs($requestUri){
        // Rimuove gli slash iniziali e finali dall'URI
        $requestUri = trim($requestUri, '/');

        // Divide l'URI in parti usando lo slash come separatore
        $uriParts = explode('/', $requestUri);

        // Rimuove la prima parte se vuota (ad esempio, se l'URI inizia con uno slash)
        array_shift($uriParts);

        // Estrae il nome del controller (default: 'User')
        $controllerName = !empty($uriParts[0]) ? ucfirst($uriParts[0]) : 'User';

        // Estrae il nome del metodo (default: 'home')
        $methodName = !empty($uriParts[1]) ? $uriParts[1] : 'home';

        // Costruisce il nome della classe del controller (es: 'CUser')
        $controllerClass = 'C' . $controllerName;

        // Costruisce il percorso del file del controller
        $controllerFile = __DIR__ . "/{$controllerClass}.php";

        // Verifica se il file del controller esiste
        if (file_exists($controllerFile)) {
            require_once $controllerFile;

            // Verifica se il metodo esiste nella classe del controller
            if (method_exists($controllerClass, $methodName)) {
        } else {
            // Controller not found, handle appropriately (e.g., show 404 page)
            header('Location: /WebApp/User/home');
        }
    }
}
public function run($requestUri){
    echo "🔍 URI ricevuta: $requestUri<br>";

    $requestUri = trim($requestUri, '/');
    $uriParts = explode('/', $requestUri);
    array_shift($uriParts);

    $controllerName = !empty($uriParts[0]) ? ucfirst($uriParts[0]) : 'User';
    $methodName = !empty($uriParts[1]) ? $uriParts[1] : 'home';

    $controllerClass = 'C' . $controllerName;
    $controllerFile = __DIR__ . '/' . $controllerClass . '.php';

    echo "🔍 Controller: $controllerClass<br>";
    echo "🔍 Metodo: $methodName<br>";
    echo "🔍 File previsto: $controllerFile<br>";

    if (file_exists($controllerFile)) {
        require_once $controllerFile;

        if (method_exists($controllerClass, $methodName)) {
            echo "✅ Metodo trovato, lo eseguo<br>";
            call_user_func_array([$controllerClass, $methodName], array_slice($uriParts, 2));
        } else {
            echo "❌ Metodo '$methodName' non trovato in classe '$controllerClass'<br>";
        }
    } else {
        echo "❌ File controller non trovato: $controllerFile<br>";
    }
}


}