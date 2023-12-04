<?php

namespace Database\Seeders;

use App\Models\Tip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tips = [
            [
                'name' => "Hidrata tu rostro antes del maquillaje",
                'description' => "Si quieres un maquillaje perfecto, pasa un hielo de zumo de pepino con sábila por el rostro y el cuello. 
                Esto dejará la piel tersa para poder poner cualquier producto de belleza.",
                'image' => $this->storeImage('tip1.jpg', 'IMG')
            ],
            [
                'name' => "Cepilla tu cabello con cerdas naturales",
                'description' => "Usa cepillos con cerdas naturales. Son muy comunes las cerdas de jabalí, pues el cabello no produce el frizz que producen las cerdas plásticas. Además, la grasa natural del cabello se distribuye de manera uniforme por toda la cabellera.",
                'image' => $this->storeImage('tip2.jpg', 'IMG')
            ],
            [
                'name' => "Agua fría para el cabello",
                'description' => "Si quieres evitar la caída de tu cabello y prevenir la resequedad, además de utilizar tratamientos anticaída, también debes enjuaga tu pelo después del lavado con agua fría, sobre todo si tu pelo es fino. El agua fría promueve más el brillo una vez secado.",
                'image' => $this->storeImage('tip3.jpg', 'IMG')
            ],
            [
                'name' => "Desinflama tus párpados",
                'description' => "Necesitas lucir perfecta después de una noche de fiesta o simplemente después de dormir un largo tiempo. Envuelve un trozo de hielo con una toalla y ponlo sobre el área inflamada de los ojos. En unos minutos comenzará a reducirse el tamaño.",
                'image' => $this->storeImage('tip4.jpg', 'IMG')
            ],
            [
                'name' => "Talco para el exceso de grasa en el cabello",
                'description' => "Para mejorar un cabello visiblemente graso, usa talco. Muchas veces alguna urgencia impide lavar el cabello con tiempo. Si es tu caso, aplica un poco de talco a las cerdas de tu cepillo y péinalo hasta quitar el exceso.",
                'image' => $this->storeImage('tip5.jpg', 'IMG')
            ],
            [
                'name' => "Uñas siempre fuertes y limpias",
                'description' => "Las uñas son la carta de presentación de las manos. Por eso deben lucir limpias y sanas. Aplica limón antes de dormir, tus uñas estarán siempre limpias y fuertes para los días en que prefieras lucirlas al natural.",
                'image' => $this->storeImage('tip6.jpg', 'IMG')
            ],
            [
                'name' => "Ejemplo",
                'description' => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, illo quis natus itaque enim sit, excepturi aliquid consequatur, consequuntur distinctio consectetur deleniti doloremque at nobis! Amet numquam eaque cum. Sint.",
                'image' => $this->storeImage('uñas.jpg', 'IMG')
            ]
        ];

        foreach ($tips as $tip) {
            Tip::create($tip);
        }
    }

    protected function storeImage($imageName, $sourceFolder)
    {
        $sourcePath = public_path($sourceFolder . '\\' . $imageName);
        $destinationPath = 'public/tips_images/' . $imageName;

        // Almacena la imagen en la carpeta storage
        Storage::put($destinationPath, file_get_contents($sourcePath));

        // Retorna la ruta para almacenar en la base de datos
        return 'tips_images/' . $imageName;
    }

}
