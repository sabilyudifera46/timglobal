<style>
    .container1122 {
  position: relative;
  width: 100%;
  height: 100%;
  margin: 100px auto 0 auto;
  perspective: 1000px;
}

.carousel11 {
  position: absolute;
  width: 100%;
  height: 100%;
  transform-style: preserve-3d; 
  animation: rotate360 60s infinite forwards linear;
}
.carousel__face { 
  position: absolute;
  width: 90%;
  height: 90%;
  top: 20px;
  left: 10px;
  right: 10px;
  background-size: cover;
  box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);
  display: flex;
}

span {
  margin: auto;
  font-size: 2rem;
}


.carousel__face:nth-child(1) {
  background-image: url("https://images.pexels.com/photos/1141853/pexels-photo-1141853.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
  transform: rotateY(  0deg) translateZ(430px); }
.carousel__face:nth-child(2) { 
  background-image: url("https://images.pexels.com/photos/1258865/pexels-photo-1258865.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
    transform: rotateY( 40deg) translateZ(430px); }
.carousel__face:nth-child(3) {
  background-image: url("https://images.pexels.com/photos/808466/pexels-photo-808466.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
  transform: rotateY( 80deg) translateZ(430px); }
.carousel__face:nth-child(4) {
  background-image: url("https://images.pexels.com/photos/1394841/pexels-photo-1394841.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
  transform: rotateY(120deg) translateZ(430px); }
.carousel__face:nth-child(5) { 
  background-image: url("https://images.pexels.com/photos/969679/pexels-photo-969679.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
 transform: rotateY(160deg) translateZ(430px); }
.carousel__face:nth-child(6) { 
  background-image: url("https://images.pexels.com/photos/1834400/pexels-photo-1834400.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
 transform: rotateY(200deg) translateZ(430px); }
.carousel__face:nth-child(7) { 
  background-image: url("https://images.pexels.com/photos/1415268/pexels-photo-1415268.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
 transform: rotateY(240deg) translateZ(430px); }
.carousel__face:nth-child(8) {
  background-image: url("https://images.pexels.com/photos/135018/pexels-photo-135018.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
  transform: rotateY(280deg) translateZ(430px); }
.carousel__face:nth-child(9) {
  background-image: url("https://images.pexels.com/photos/1175135/pexels-photo-1175135.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
  transform: rotateY(320deg) translateZ(430px); }



@keyframes rotate360 {
  from {
    transform: rotateY(0deg);
  }
  to {
    transform: rotateY(-360deg);
  }
}
</style>
<div class="container1122">
  <div class="carousel11">
    <div class="carousel__face"><span>This is something</span></div>
    <div class="carousel__face"><span>Very special</span></div>
    <div class="carousel__face"><span>Special is the key</span></div>
    <div class="carousel__face"><span>For you</span></div>
    <div class="carousel__face"><span>Just give it</span></div>
    <div class="carousel__face"><span>A try</span></div>
    <div class="carousel__face"><span>And see</span></div>
    <div class="carousel__face"><span>How IT Works</span></div>
    <div class="carousel__face"><span>Woow</span></div>
  </div>
</div>