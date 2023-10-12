## Comandos especiales para generación de TEST's
Con los siguientes comandos se generan test's orientando a una carpeta especifica
Código
```
$ php artisan make:test ExampleTest             // Test en Feature
$ php artisan make:test ExampleTest --unit      // Test en Unit
```

### Unit
Utilizamos test unitarios cuando queremos evaluar una función especifica, por ejemplo:

```
public function test_example()
{
    $var = true;
    
    $this->assertTrue($var);
}
```
Para unitarias probamos solo una parte o algo especifico.
### Feature
Tambien existe la sección de funcionalidad o función, utilizamos esta carpeta cuando queremos probar algo mas amplio.
```
public function test_example()
{
    $response = $this->get('/');

    $response->assertStatus(200);
}
```
En este código queremos verificar el accesos a una pagina por lo tanto usarmos `assertStatus(200)` mediante `$this->get('/')`. Probamos un todo para features donde se prueban rutas, vistas, controladores.
## Objetivo real de los testing
Se tiene que evocar directamente en los resultados, donde a traves del testing se debe verificar que el resultado final de procesamiento es el resultado esperado.