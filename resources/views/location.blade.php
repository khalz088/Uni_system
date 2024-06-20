<x-app-layout>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <input type="text" id="searchInput" placeholder="Search for Venue by name..." class="border p-2 rounded-md w-full mb-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="relative group ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d464.6313483752764!2d36.6788244343995!3d-3.3654402603513422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371dbbcd4f2b71%3A0x94b315e4419abf6!2sUfundi%20Tower!5e1!3m2!1ssw!2stz!4v1713007910566!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                            <p class="hidden">Ufundi Tower</p>
                        </div>

                        <div class="relative group">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d450.5440955445809!2d36.678738626981485!3d-3.3649747483362926!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371c8a1a9e8e6f%3A0x57898fad4629ad1b!2sCivil%20%26%20Irrigation!5e1!3m2!1ssw!2stz!4v1713433214645!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                            <p class="hidden">Civil & Irrigation</p>
                        </div>
                        <div class="relative group">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d450.54401426401563!2d36.677698229983136!3d-3.3651505414311944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371c8a6c62c823%3A0x9c8cba3d20274c1b!2sMechanical%20I%20Workshop!5e1!3m2!1ssw!2stz!4v1713434655262!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                            <p class="hidden">Mechanical I Workshop</p>
                        </div>
                        <div class="relative group">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225.2720373524201!2d36.67814073528879!3d-3.365019821270775!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371c8a7212ab67%3A0x403b3166d05ddab8!2sElectrical%20Workshop!5e1!3m2!1ssw!2stz!4v1713435220244!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="w-full"></iframe>
                            <p class="hidden">Electrical Workshop</p>
                        </div>
                        <div class="relative group">
                            <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d672.6825430219048!2d36.677042225054585!3d-3.3649779447091066!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371c8a7bc66de3%3A0x7329f66204bb3dd4!2sAutoelectric%20Workshop!5e1!3m2!1ssw!2stz!4v1714550323312!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p class="hidden">Autoelectric Workshop</p>
                        </div>
                        <div class="relative group">
                            <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d282.8284005013082!2d36.67775368447286!3d-3.364182010119486!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371c61d9144841%3A0x50f7754a497cd4a8!2sICT%20Department!5e1!3m2!1ssw!2stz!4v1714550570256!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p class="hidden">Ict </p>
                        </div>

                        <div class="relative group">
                            <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d475.6585831241902!2d36.67777447224775!3d-3.3645776807591825!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x18371c8a7679b457%3A0x14c706f25513b65!2sLibrary!5e1!3m2!1ssw!2stz!4v1714550503009!5m2!1ssw!2stz" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            <p class="hidden">Library</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const mapIframes = document.querySelectorAll('.relative.group iframe');

            searchInput.addEventListener('input', function() {
                const value = searchInput.value.toLowerCase();
                mapIframes.forEach(iframe => {
                    const title = iframe.nextElementSibling.textContent.toLowerCase();
                    if (title.includes(value)) {
                        iframe.style.display = 'block';
                    } else {
                        iframe.style.display = 'none';
                    }
                });
            });
        });

    </script>
</x-app-layout>
