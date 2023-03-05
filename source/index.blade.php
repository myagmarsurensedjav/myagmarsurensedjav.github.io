@extends('_layouts.main')

@section('body')
<div class="container mx-auto py-20">
    <div class="md:flex justify-between items-center">
        <div class="font-bold text-2xl font-mono text-center md:text-left">
            <a href="/">💡 Myagmarsuren Sedjav</a>
        </div>

        <div class="flex justify-center mt-4 md:mt-0">
            <ul class="inline-flex space-x-4">
                <li><a class="p-2 text-lg border-b border-dashed border-gray-300" href="/">Home</a></li>
                <li><a class="p-2 text-lg border-b border-dashed border-transparent hover:border-gray-200" href="/about">About</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="container mx-auto p-12 lg:py-40 lg:px-20">
        <div class="lg:flex justify-between items-center">
            <div class="flex justify-center space-x-6">
                <img class="w-64" src="/assets/images/myagmarsurensedjav.png" alt="Myagmarsuren Sedjav">
            </div>

            <div class="lg:w-2/3 text-center mt-12 lg:text-left text-gray-700 text-lg">
                <h2 class="text-4xl font-semibold mb-6 text-black">Амар мэнд үү?</h2>

                <p class="mb-4">
                    Намайг <strong>С.Мягмарсүрэн</strong> гэдэг, би программ хангамжийн инженер мэргэжилтэй. Миний ажилласан <a class="text-blue-700" href="https://www.mplus.mn/">Mplus</a>, <a class="text-blue-700" href="https://www.wplus.world">World Plus</a>, <a class="text-blue-700" href="https://www.mmusic.mn/">MMusic</a> гэх мэт зарим нэг төслүүдийг та мэдэж магадгүй юм.
                </p>

                <p class="mb-4">
                    Би ихэвчлэн программын бакэнд хэсгийг ахлан ажилладаг үүнийхээ хүрээнд TDD аргачлалаар Rest API болон Admin panel хөгжүүлдэг.
                </p>

                <p class="mb-4">Cloud system дээр дэд бүтэц үүсгэх, CI/CD автоматжуулалт, Containerized аппликэйшн бүтээх болон түүнд хамрагддаг DevOps технологиудыг ашиглах зэргээр ажиллаж байсан.</p>

                <p><strong>Технологи</strong>: Laravel, PHPUnit, Vue, Docker, Kubernetes, GCP, Digitalocean, Terraform, TailwindCSS</p>
            </div>
        </div>
    </div>
</div>

<div class="mt-12 flex justify-center font-mono">
    <div class="text-lg">
        <div class="text-center text-gray-500">Надтай холбогдох</div>
        <ul class="inline-flex space-x-6 mt-4">
            <li><a class="text-black border-b pb-1 border-gray-400 border-dashed" href="https://github.com/myagmarsurensedjav">Github</a></li>
            <li><a class="text-black border-b pb-1 border-gray-400 border-dashed" href="https://twitter.com/miigaasv">Twitter</a></li>
            <li><a class="text-black border-b pb-1 border-gray-400 border-dashed" href="https://www.linkedin.com/in/myagmarsuren-sedjav-965827200/">Linkedin</a></li>
        </ul>
    </div>
</div>
@endsection