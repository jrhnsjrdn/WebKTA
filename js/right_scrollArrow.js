  document.querySelector('.scroll-arrow-right').addEventListener('click', function() {
    document.querySelector('.bottom-nav').scrollBy({
      left: 200, /* Jumlah piksel yang digulirkan */
      behavior: 'smooth' /* Efek gulir halus */
    });    
​});
