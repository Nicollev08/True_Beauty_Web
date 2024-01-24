<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => "MANICURE",
                'description' => "Dale un toque de estilo a tus manos! 💅 
                Descubre la magia de nuestras manicuras profesionales. 
                Colores vibrantes, diseños elegantes y un cuidado impecable para tus uñas. 
                Reserva tu cita y deja que tus manos hablen por ti.",
                'duration' => "2:30 hr",
                'image' => $this->storeImage('uñas.jpg', 'IMG')
            ],
            [
                'name' => "PESTAÑAS",
                'description' => "Potencia tu mirada con nuestras extensiones de pestañas. 🌟 
                Resalta tu belleza natural con pestañas largas y exuberantes. 
                ¡Haz que tus ojos brillen con cada parpadeo! Reserva tu cita para una mirada cautivadora. ✨",
                'duration' => "2hr",
                'image' => $this->storeImage('pestañas.jpg', 'IMG'),
            ],
            [
                'name' => "CUIDADO FACIAL",
                'description' =>  "Regálate un momento de lujo para tu piel. ✨ 
                Descubre la pureza y frescura con nuestros tratamientos de cuidado facial. 
                Deja que tu piel respire y brille con una limpieza profunda. 
                Reserva tu sesión para revitalizar tu piel y resaltar tu belleza natural. 💆‍♀️✨",
                'duration' => "3hr",
                'image' => $this->storeImage('facial.jpg', 'IMG'),
            ],
            [
                'name' => "MAQUILLAJE",
                'description' => "¡Resalta tu belleza con nuestro arte del maquillaje! 💄 
                Descubre looks irresistibles y radiantes que resaltan lo mejor de ti. 
                Desde maquillaje natural hasta looks audaces, estamos aquí para realzar tu confianza. 
                Reserva tu sesión y déjanos crear magia en tu rostro. ✨",
                'duration' => "2hr",
                'image' => $this->storeImage('maquillaje.jpg', 'IMG'),
            ],
            [
                'name' => "PEINADOS",
                'description' => "¡Descubre tu estilo único con nuestros increíbles peinados para dama! Desde looks elegantes hasta tendencias vanguardistas, te ayudaremos a expresar tu belleza con creatividad y sofisticación. ¡Haz una declaración de moda con cada cabello! 💇‍♀️✨",
                'duration' => "1hr",
                'image' => $this->storeImage('tip2.jpg', 'IMG'),
            ],
            [
                'name' => "KERATINAS",
                'description' => "¡Transforma tu cabello con nuestra keratina de alta calidad! Dale a tu melena un impulso de suavidad, brillo y fuerza. Despídete del frizz y luce un cabello radiante y saludable. ¡Descubre la magia de la keratina y atrévete a brillar con confianza! 💁‍♀️✨ ",
                'duration' => "5hr",
                'image' => $this->storeImage('shampoo.jpg', 'IMG'),
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }

    protected function storeImage($imageName, $sourceFolder)
    {
        $sourcePath = public_path($sourceFolder . '\\' . $imageName);
        $destinationPath = 'public/services_images/' . $imageName;

        // Almacena la imagen en la carpeta storage
        Storage::put($destinationPath, file_get_contents($sourcePath));

        // Retorna la ruta para almacenar en la base de datos
        return 'services_images/' . $imageName;
    }
}
