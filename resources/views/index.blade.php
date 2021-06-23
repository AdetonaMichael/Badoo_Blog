@extends('layouts.app')

@section('content')
<div class="background-image text-gray-800 grid grid-cols-1 m-auto">
        <div class="m-auto md:p-10  w-4/5 justify-center bg-gray-300 flex  text-center">
           <div class="image"><svg  aria-hidden="true" focusable="false" data-prefix="fas" data-icon="blog" class="svg-inline--fa fa-blog fa-w-16 md:w-60 md:h-60 mx-0 my-0" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M172.2 226.8c-14.6-2.9-28.2 8.9-28.2 23.8V301c0 10.2 7.1 18.4 16.7 22 18.2 6.8 31.3 24.4 31.3 45 0 26.5-21.5 48-48 48s-48-21.5-48-48V120c0-13.3-10.7-24-24-24H24c-13.3 0-24 10.7-24 24v248c0 89.5 82.1 160.2 175 140.7 54.4-11.4 98.3-55.4 109.7-109.7 17.4-82.9-37-157.2-112.5-172.2zM209 0c-9.2-.5-17 6.8-17 16v31.6c0 8.5 6.6 15.5 15 15.9 129.4 7 233.4 112 240.9 241.5.5 8.4 7.5 15 15.9 15h32.1c9.2 0 16.5-7.8 16-17C503.4 139.8 372.2 8.6 209 0zm.3 96c-9.3-.7-17.3 6.7-17.3 16.1v32.1c0 8.4 6.5 15.3 14.8 15.9 76.8 6.3 138 68.2 144.9 145.2.8 8.3 7.6 14.7 15.9 14.7h32.2c9.3 0 16.8-8 16.1-17.3-8.4-110.1-96.5-198.2-206.6-206.7z"></path></svg></div> 
           <div class="content space-y-10 p-5 font-serif text-xl"> 
           <h1 class="text-gray-800 text-4xl uppercase font-bold">Lorem Heading Title </h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consectetur dignissimos iure, officiis rem dolorem culpa consequuntur eius voluptatum blanditiis ut, quas ullam, nobis nostrum. Blanditiis fugiat quae dicta! Excepturi, repellat.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio nesciunt esse dolor vitae blanditiis ullam suscipit ipsum in adipisci nemo.</p>
           </div>
        </div>
</div>
<div class="mx-0 min-h-4/5 text-center text-gray-900 justify-center md:grid md:grid-cols-3 p-10 ">
     <div class="holder1 text-center">
         <i class="fa fa-address-card fa-3x bg-gray-300" aria-hidden="true"></i>
             <h2>Entertainment</h2>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem eum numquam asperiores consequatur cumque nisi non quibusdam magni velit.</p>
     </div>
     <div class="holder1 text-center bg-gray-300 md:mx-5 my-5">
         <i class="fa fa-address-card fa-3x" aria-hidden="true"></i>
             <h2>Entertainment</h2>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem eum numquam asperiores consequatur cumque nisi non quibusdam magni velit.</p>
     </div>
     <div class="holder1 text-cente bg-gray-300r">
         <i class="fa fa-address-card fa-3x" aria-hidden="true"></i>
             <h2>Entertainment</h2>
             <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis autem eum numquam asperiores consequatur cumque nisi non quibusdam magni velit.</p>
     </div>


</div>

<div class="md:mx-20 py-15 bg-gray-900 box-shadow  shadow-lg rounded mb-5">
    <h2 class="text-center  text-white mb-10 font-extrabold text-6xl">The Geo Team</h2>
    <div class="block md:flex">
        {{-- <div class="box2 bg-gray-700 md:mx-5 rounded-lg">
            <h4 class=" text-white pl-5 my-5 bold font-bold">head2</h4>
            <span class="fas fa-file text-right text-white mx-5">

                <br><br>
                <hr>
                <p class="p-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error autem eligendi facilis,
                    quis sint ipsum neque voluptates totam corporis provident quia aliquam deserunt, aut quod nemo
                    doloribus magni saepe laudantium.</p>
                <hr>
                <br><br>

        </div> --}}

        <div class="box2 bg-gray-700 md:mx-5 rounded-lg">
            <div class="flex items-center justify-end">
            <h4 class=" text-white pl-5 my-5 font-extrabold text-4xl">Mapper</h4>
            <span class="fas fa-map text-right text-white mx-5 fa-2x"></span>
            </div>
                <hr>
                <div class="relative bg-gray-800 justify-around p-8 text-gray-50 rounded-xl space-y-7">
                    <div class="h-3 w-10 bg-yellow-400"></div>
                    <h2  style="font-size:xxx-large;" classs=" text-white text-5xl">25%</h2>
                        <p class="leading-snug text-gray-400"> Mapping Insight Score. Delight your Users and improve your Mapping Skills</p>
                        <a href="#" class="pt-2 text-yellow-400 font-bold tracking-wide flex">Learn More <i class="fas fa-arrow-right pl-3"></i></a>
                </div>
                <br><br>
                <hr>
        </div>
        <div class="box2 bg-gray-700 md:mx-5 rounded-lg">
            <div class="flex items-center justify-end">
                <h4 class=" text-white pl-5 my-5 font-extrabold text-4xl">Developer</h4>
                <span class="fas fa-mobile text-right text-white mx-5 fa-2x"></span>
                </div>
                <hr>
                <div class="relative bg-gray-800 p-8 text-gray-50 rounded-xl space-y-7">
                    <div class="h-3 w-10 bg-yellow-400"></div>
                    <h2 style="font-size:xxx-large;" classs=" text-white text-left">50%</h2>
                        <p class="leading-snug text-gray-400"> Developer Insight Score. Develop Both Mobile and Web products For Solving Problems and Delivering solution</p>
                        <a href="#" class="pt-2 text-yellow-400 font-bold tracking-wide flex">Learn More <i class="fas fa-arrow-right pl-3"></i></a>
                </div>
                <br><br>
                <hr>
        </div>
        <div class="box2 bg-gray-700 md:mx-5 rounded-lg">
            <div class="flex items-center justify-end">
                <h4 class=" text-white pl-5 my-5 font-extrabold text-4xl">Geo-Developer</h4>
                <span class="fas fa-globe text-right text-white mx-5 fa-2x"></span>
                </div>
                <hr>
                <div class="relative bg-gray-800 p-8 text-gray-50 rounded-xl space-y-7">
                    <div class="h-3 w-10 bg-yellow-400"></div>
                    <h2 style="font-size:xxx-large;" classs=" text-white text-left">100%</h2>
                        <p class="leading-snug text-gray-400"> Integrate Mapping Skills with Developer Skills and leverage the Benefits By connecting with Your Clients</p>
                        <a href="#" class="pt-2 text-yellow-400 font-bold tracking-wide flex">Learn More <i class="fas fa-arrow-right pl-3"></i></a>
                </div>
                <br><br>
                <hr>
        </div>

      

    </div>
</div>
{{-- <div class="">
    <div class="items-center justify-between flex my-4">
        <div class=" m-5">
          <h2 class="text-4xl md:text-4xl font-semibold tracking-tight  leading-7 md:leading-10 mb-2 truncate">Join Our Geo Developer Team</h2>
          <p class="font-base text-2xl tracking-tight text-gray-600 mb-2 p-10">Lorem ipsum is placeholder text commonly used in the graphic. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni dicta commodi tempore.</p>
       
        </div>
      </div>
     
</div> --}}


<div class="becomeus block md:flex justify-center">
    <div class="thetext items-justify-center m-5 p-5 relative top-11">
        <h2 class="text-4xl font-bold pb-4 ">Become Part of Our Team</h2>
        <p class="font-semibold font-sans">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium atque
            quis, perspiciatis obcaecati dolore velit nobis deserunt incidunt ipsam voluptate perferendis laboriosam
            maxime rerum ratione dolorum nulla qui similique, neque distinctio corporis, illo eligendi sequi magni.
            Modi, quasi!</p>
        <div class="socials block md:flex justify-around">
            <button
                class="bg-green-400  px-5 py-2 my-6 text-sm shadow-sm font-semibold tracking-wider text-white rounded hover:bg-gray-800">Join
                Us <i class="fab fa-whatsapp fa-2x px-2 bg-green-400 text-white"></i></button>
            <button
                class="bg-blue-600 px-5 py-2 my-6 text-sm shadow-sm font-semibold tracking-wider text-white rounded hover:bg-gray-800">Join
                Us <i class="fab fa-facebook fa-2x px-2 bg-blue-600 text-white"></i></button>
            <button
                class="bg-gray-900 px-5 py-2 my-6 text-sm shadow-sm font-semibold tracking-wider text-white rounded hover:bg-gray-800">Join
                Us <i class="fab fa-instagram fa-2x px-2"></i></button>
        </div>
    </div>

    <div class=" m-5 p-5">
        <div class="svgimage ">
            <svg id="ab47acfe-844d-4101-aa7b-df38aa50dbe4"  data-name="Layer 1"
                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 971.0518 628.38145">
                <path
                    d="M847.93141,636.215h0a249.62642,249.62642,0,0,1-2.09461-54.11121l2.09461-29.88879h0c-11.54175,22.96552-8.93335,53.1922,0,83.99994Z"
                    transform="translate(-114.4741 -135.80928)" fill="#cacaca" />
                <path
                    d="M856.93141,641.215h0a183.49726,183.49726,0,0,1-1.00781-32.209l1.00781-17.791h0C851.37831,604.885,852.63331,622.877,856.93141,641.215Z"
                    transform="translate(-114.4741 -135.80928)" fill="#cacaca" />
                <path
                    d="M896.93606,663.21738v10a3.01557,3.01557,0,0,1-3,3h-5a.99647.99647,0,0,0-1,1v82a3.01557,3.01557,0,0,1-3,3h-61a3.0023,3.0023,0,0,1-3-3v-82a1.003,1.003,0,0,0-1-1h-6a3.0023,3.0023,0,0,1-3-3v-10a2.99585,2.99585,0,0,1,3-3h80A3.009,3.009,0,0,1,896.93606,663.21738Z"
                    transform="translate(-114.4741 -135.80928)" fill="#f2f2f2" />
                <rect x="706.5518" y="542.50808" width="67" height="3" fill="#e6e6e6" />
                <path
                    d="M887.93606,722.46217c-22.41974,9.27794-45.084,9.38019-68,0V701.327a106.78989,106.78989,0,0,1,68,0Z"
                    transform="translate(-114.4741 -135.80928)" fill="#e6e6e6" />
                <circle class="animate-bounce" cx="451.48125" cy="213.98538" r="36.39575" fill="#2f2e41" />
                <path
                    d="M576.09529,314.40075a36.40078,36.40078,0,0,1,32.03936,53.66882,36.38707,36.38707,0,1,0-60.4544-39.98248A36.306,36.306,0,0,1,576.09529,314.40075Z"
                    transform="translate(-114.4741 -135.80928)" fill="#2f2e41" />
                <circle cx="383.4705" cy="106.99576" r="106.91249" fill="#2f2e41" />
                <path
                    d="M414.03572,176.47092A106.89327,106.89327,0,0,1,562.20289,165.261c-.87427-.83106-1.73926-1.66886-2.6477-2.47643a106.91251,106.91251,0,0,0-142.0661,159.80724c.90844.80758,1.84179,1.56848,2.76953,2.33935A106.89336,106.89336,0,0,1,414.03572,176.47092Z"
                    transform="translate(-114.4741 -135.80928)" fill="#2f2e41" />
                <circle cx="382.5645" cy="144.14332" r="68.85889" fill="#ffb8b8" />
                <path
                    d="M532.21437,367.50466l-73.68847,3.31269s6.15038,38.10812-33.71528,41.73229-76.10721-7.24829-90.60382,19.93283-8.24829,123.96607-8.24829,123.96607,27.18115,97.85211,48.92605,112.34875,212.01291-5.43622,212.01291-5.43622L666.5259,562.81735l-2.697-77.53951c-1.40839-40.49105-38.37693-70.89154-78.1935-63.39829q-1.17287.22073-2.36205.47539s-8.74743-6.53759-32.74743-18.53759C535.8492,396.479,532.21437,367.50466,532.21437,367.50466Z"
                    transform="translate(-114.4741 -135.80928)" fill="#cacaca" />
                <path
                    d="M372.26039,410.73757s17.5138,31.77787,10.26551,77.07978,23.164,141.11428,23.164,141.11428l21.74494-5.43622s-14.49662-94.228-10.87244-115.9729,4.62414-85.91251-13.49661-96.78494S372.26039,410.73757,372.26039,410.73757Z"
                    transform="translate(-114.4741 -135.80928)" fill="#2f2e41" />
                <path
                    d="M581.99873,427.39977l7.61682,200.62579,14.49658,9.06037s20.83887-220.16727,9.96643-220.16727H591.95607a9.97041,9.97041,0,0,0-9.9704,9.97043Q581.98567,427.14457,581.99873,427.39977Z"
                    transform="translate(-114.4741 -135.80928)" fill="#2f2e41" />
                <circle cx="301.18217" cy="479.53178" r="9.06039" fill="#6c63ff" />
                <circle cx="482.38982" cy="488.59217" r="9.06038" fill="#6c63ff" />
                <polygon
                    points="323.672 58.069 323.672 126.928 339.619 126.928 359.914 105.183 357.196 126.928 427.685 126.928 423.336 105.183 432.034 126.928 443.269 126.928 443.269 58.069 323.672 58.069"
                    fill="#2f2e41" />
                <ellipse cx="312.79955" cy="129.6467" rx="5.43622" ry="9.96642" fill="#ffb8b8" />
                <ellipse cx="452.32945" cy="129.6467" rx="5.43622" ry="9.96642" fill="#ffb8b8" />
                <path
                    d="M717.62587,744.25542v6.07a13.34036,13.34036,0,0,1-.91,4.87,13.68347,13.68347,0,0,1-.97,2,13.4372,13.4372,0,0,1-11.55,6.56h-446.55a13.43737,13.43737,0,0,1-11.55-6.56,13.68965,13.68965,0,0,1-.97-2,13.34125,13.34125,0,0,1-.91-4.87v-6.07a13.42638,13.42638,0,0,1,13.42282-13.43h25.74717v-2.83a.55906.55906,0,0,1,.55816-.56h13.43183a.5591.5591,0,0,1,.56.55817v2.83185h8.39v-2.83a.55906.55906,0,0,1,.55816-.56h13.43183a.5591.5591,0,0,1,.56.55817v2.83185h8.4v-2.83a.55906.55906,0,0,1,.55817-.56h13.43182a.5591.5591,0,0,1,.56.55817v2.83185h8.39v-2.83a.55906.55906,0,0,1,.55817-.56h13.43182a.5591.5591,0,0,1,.56.55817v2.83185h8.39v-2.83a.55907.55907,0,0,1,.55817-.56h13.43182a.5591.5591,0,0,1,.56.55817v2.83185h8.4v-2.83a.55906.55906,0,0,1,.55816-.56h13.43183a.5591.5591,0,0,1,.56.55817v2.83185h8.39v-2.83a.55908.55908,0,0,1,.55817-.56H526.80586a.55908.55908,0,0,1,.56.55817v2.83185h8.4v-2.83a.55908.55908,0,0,1,.55817-.56h13.43182a.5655.5655,0,0,1,.56.56v2.83h8.39v-2.83a.55908.55908,0,0,1,.55817-.56h13.43182a.55908.55908,0,0,1,.56.55817v2.83185h8.39v-2.83a.55908.55908,0,0,1,.55816-.56h13.43183a.55908.55908,0,0,1,.56.55817v2.83185h8.4v-2.83a.55908.55908,0,0,1,.55816-.56h13.43183a.557.557,0,0,1,.55.56v2.83h8.4v-2.83a.55908.55908,0,0,1,.55817-.56h13.43182a.55908.55908,0,0,1,.56.55817v2.83185h8.39v-2.83a.55908.55908,0,0,1,.55817-.56h13.43182a.55908.55908,0,0,1,.56.55817v2.83185h39.17a13.42639,13.42639,0,0,1,13.43,13.42273Z"
                    transform="translate(-114.4741 -135.80928)" fill="#3f3d56" />
                <rect y="626.38145" width="971.0518" height="2" fill="#3f3d56" />
                <path
                    d="M681.66835,488.62124H272.6248a11.2586,11.2586,0,0,0-11.25861,11.2586V727.79131A11.25867,11.25867,0,0,0,272.62477,739.05H681.66835a11.25866,11.25866,0,0,0,11.2586-11.25867V499.87984a11.2586,11.2586,0,0,0-11.2586-11.2586Z"
                    transform="translate(-114.4741 -135.80928)" fill="#3f3d56" />
                <circle cx="362.99998" cy="432.38142" r="25" fill="#6c63ff" />
                <polygon
                    points="517.763 267.219 643.969 140.016 703.552 140.016 703.552 138.016 643.134 138.016 642.841 138.313 516.341 265.813 517.763 267.219"
                    fill="#3f3d56" />
                <rect x="776.32793" y="87.79227" width="146.22388" height="13.02985" fill="#6c63ff" />
                <path d="M872.981,244.87035H842.02589V213.91478H872.981Zm-28.95508-2H870.981V215.91478H844.02589Z"
                    transform="translate(-114.4741 -135.80928)" fill="#3f3d56" />
                <rect x="776.32793" y="131.2251" width="146.22388" height="13.02985" fill="#6c63ff" />
                <path d="M872.981,288.303H842.02589V257.34789H872.981Zm-28.95508-2H870.981V259.34789H844.02589Z"
                    transform="translate(-114.4741 -135.80928)" fill="#3f3d56" />
                <rect x="776.32793" y="174.65794" width="146.22388" height="13.02985" fill="#6c63ff" />
                <path d="M872.981,331.73558H842.02589V300.78051H872.981Zm-28.95508-2H870.981V302.78051H844.02589Z"
                    transform="translate(-114.4741 -135.80928)" fill="#3f3d56" /></svg>
        </div>
    </div>
</div>

{{-- check out our Resources Page --}} 
<div class="bg-gray-800  items-center my-10 space-y-20 block py-10 mx-10 rounded-2xl ">
    <h2 class="font-extrabold text-4xl text-center text-white">Geo Resources</h2>
    <p class="text-xl font-bold text-center text-white"> Navigate Our Resources Page for Useful Tools you might need <i class="fas fa-wheel"></i></p>
    <div class="text-center"><a href="/resource"><button class="focus:outline-none rounded-full bg-yellow-300 font-bold text-2xl hover:bg-yellow-900 text-gray-900 border-gray-900 px-8 py-4 hover:text-gray-200 mb-5">Check It Out</button></a></div>
</div>


@endsection
