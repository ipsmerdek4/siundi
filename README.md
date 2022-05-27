SELAMAT DATANG DI SI~UNDI


cara Instalasi
1. gunakan composer dan clone dengan link :  $ git clone https://github.com/ipsmerdek4/sie-jaku.git 
2. masuk ke dalam folder root si~undi dan update : $ composer update
3. download template di [getsistl](https://getstisla.com/) atau masuk ke folder public/stisla/ dan buka composer clone dengan link: $ git clone https://github.com/stisla/stisla.git
4. download machine template getstisla dengan cara :
    a. install node.js
    b. download yarn : $ npm i -g yarn
    c. isntall machine untuk template getstisla : $ yarn install
5. marge database : $ php spark migrate
6. start seed : $ php spark db:seed All
7. Enjoy.
