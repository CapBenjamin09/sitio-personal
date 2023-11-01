<x-layouts.app>
    <div class="max-w-screen-xl mx-auto px-5 grid lg:grid-cols-2 place-items-center pt-16 md:pt-12 md:pb-12">
        <div class="py-6 md:order-1 hidden md:block">
            <img src="{{ asset('./images/book.jpg') }}" alt="">
        </div>
        <div>
            <x-title>
                Sobre mi
            </x-title>

            <p class="text-lg mt-4 text-slate-600 max-w-xl">
                Soy un apasionado del desarrollo, especialmente del desarrollo web. Disfruto trabajando con frameworks y
                tengo experiencia con algunos de ellos, como AngularJS y Laravel. Con un año de experiencia en el desarrollo,
                estoy ansioso por aprender más y tengo la firme intención de dominar el framework Spring en el futuro.
                Mi compromiso con la programación y el desarrollo web me impulsa a seguir creciendo en esta industria en
                constante evolución. Mi habilidad para trabajar con frameworks y mi disposición para aprender y mejorar me
                hacen sentir confiado en mi camino en el mundo del desarrollo web.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3 items-center container">
                <p class="text-lg text-slate-600 max-w-xl items-center font-semibold">
                    Te interesa el desarrollo de algún proyecto?
                </p>
                <x-a-button type="black" href="{{ route('contact.index') }}">Contactamé</x-a-button>
            </div>
        </div>
    </div>

    <hr class="max-w-screen-xl h-px mb-8 bg-gray-200 border-0 w-full mx-auto">

    <div class="w-full items-center justify-center mx-auto grid pb-3">
        <div class="grid mb-20 items-center justify-center">
            <x-title>Más sobre mi... </x-title>
        </div>
        <div class="block max-w-5xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 my-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Experiencia</h5>
            <p class="font-normal text-gray-700">
                Mi experiencia en desarrollo web ha sido apasionante y recompensante. A lo largo de los años, he
                invertido mucho tiempo en aprender y perfeccionar mis habilidades, lo que ha dado sus frutos. He trabajado
                con tecnologías como PHP, PHP Laravel y Angular, y he participado en diversos proyectos, desde sitios
                web personales hasta aplicaciones web más complejas. Mi dedicación al aprendizaje constante y mi atención
                al diseño y la usabilidad han sido clave en mi éxito en el desarrollo web, y sigo emocionado por seguir
                creciendo en este emocionante campo.
            </p>
        </div>

        <div class="block max-w-5xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 my-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Habilidades</h5>
            <p class="font-normal text-gray-700">
                Tengo una amplia gama de habilidades en el ámbito de la tecnología. Mi experiencia en desarrollo web,
                particularmente con PHP Laravel, me ha permitido trabajar en proyectos diversos y desafiantes. Además,
                he desempeñado roles como Quality Assurance (QA), donde he perfeccionado mi capacidad de garantizar la
                calidad en el desarrollo de software. Mi conocimiento de AWS me ha permitido trabajar en entornos de la
                nube, y también poseo competencias sólidas en seguridad informática, contribuyendo a salvaguardar sistemas
                y datos. Estas habilidades en conjunto me han brindado una perspectiva valiosa y la capacidad de abordar proyectos
                tecnológicos de manera integral y segura.
            </p>
        </div>
        <div class="block max-w-5xl p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 my-4">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Logros Profesionales</h5>
            <p class="font-normal text-gray-700">
                Mis logros profesionales han sido impulsados por mi compromiso constante con el aprendizaje y la mejora.
                En particular, destacaría mi experiencia en desarrollo web, que se ha enriquecido gracias a mi participación
                en el curso de Web 2. Aquí, adquirí un conocimiento profundo de AngularJS, que ha ampliado mis habilidades en la
                creación de aplicaciones web dinámicas. Además, he profundizado en Laravel, perfeccionando mis capacidades en PHP.
                También, he tenido la oportunidad de explorar Ruby on Rails y otras tecnologías, lo que ha enriquecido mi conjunto de
                habilidades y me ha permitido abordar una variedad de proyectos web de manera más efectiva y versátil.
            </p>
        </div>
    </div>


</x-layouts.app>
