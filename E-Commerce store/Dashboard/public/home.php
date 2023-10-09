<div class="glitch"><span class='part-1'><span>Hello   Admin</span></span></div>


<style>
    @import url('https://fonts.googleapis.com/css2?family=Baloo+2:wght@800&family=Bungee+Hairline&family=Bungee+Outline&family=Flow+Block&family=Inspiration&family=Noto+Nastaliq+Urdu:wght@700&family=Noto+Sans+KR:wght@900&family=Noto+Sans+TC:wght@900&family=Rubik+Bubbles&family=Rubik+Glitch&family=Rubik+Spray+Paint&display=swap');

body{
  margin:0;
  padding:0;
  background:#222;
  overflow:hidden;
  display:flex;
  justify-content:center;
  align-items:center;
  flex-direction:column;
  height:100vh;
}
.glitch{
  positon:relative;
  color:white;
  font-size:clamp(8rem, 9rem,  80vw);;
  
  font-family: 'Rubik Spray Paint', cursive;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  animation: glitch-color 0.5s linear infinite, glitch-font 10s linear infinite,  glitch-font-size 0.1s linear infinite, glitch-font-spacing 0.2s linear infinite;
}

.glitch-2{
  justify-content: flex-start;
}

.part-1, .part-2{
  overflow: hidden;
  display: block;
  height: 50%;
  animation: glitch-font-slicing 1.5s linear infinite;
}
.part-2{
  animation: glitch-font-slicing 1.5s 0.1s linear infinite reverse;
}
.part-2 span {
  transform: translateY(-50%);
  display: block;
}
.part-1 span {
  transform: translateY(0%);
  display: block;
  animation: glitch-font-move-up 1s infinite reverse;
}

@keyframes glitch-color{
  0%{
    text-shadow: 0px -20px #0000fe;
  }
  7%{
    text-shadow: 0px -20px #0000fe, -5px 5px #fe0000;
    
  }
  19%{
  text-shadow: -5px 5px #fe0000;
    
  }
  31%{
  text-shadow: -5px 5px #fe0000, -10px 0px #ff00fe;
    
  }
  39%{
  text-shadow: -10px 0px #ff00fe;
    
  }
  42%{
    text-shadow: 0px -20px #0000fe, -5px 5px #fe0000, -10px 0px #ff00fe, 10px -10px #01ffff,  0px 10px #ffff01,  10px 10px #00ff01;
  }
  52%{
  text-shadow: -10px 0px #ff00fe, 10px -10px #01ffff;
    
  }
  61%{
  text-shadow: 10px -10px #01ffff;
    
  }
  75%{
  text-shadow: 10px -10px #01ffff, 0px 10px #ffff01;
    
  }
  81%{
  text-shadow: 0px 10px #ffff01;
    
  }
  88%{
  text-shadow: 0px 10px #ffff01, 10px 10px #00ff01;
    
  }
  100%{
  text-shadow: 10px 10px #00ff01;
    
  }
}

@keyframes glitch-font{
  0%{
    font-family: 'Rubik Spray Paint', cursive;
  }
  5%{
    font-family: 'Rubik Spray Paint', cursive;
  }
  6%{
    font-family: 'Rubik Glitch', cursive;
  }
  10%{
    font-family: 'Rubik Glitch', cursive;
  }
  11%{
/*     font-family: 'Press Start 2P', cursive; */
  }
  15%{
/*     font-family: 'Press Start 2P', cursive; */
  }
  16%{
    font-family: 'Rubik Glitch', cursive;
  }
  20%{
    font-family: 'Rubik Glitch', cursive;
  }
  21%{
font-family: 'Rubik Bubbles', cursive;
  }
  25%{
font-family: 'Rubik Bubbles', cursive;
  }
  26%{
    font-family: 'Rubik Glitch', cursive;
  }
  30%{
    font-family: 'Rubik Glitch', cursive;
  }
  31%{
font-family: 'Noto Sans KR', sans-serif;
  }
  35%{
font-family: 'Noto Sans TC', sans-serif;
  }
  36%{
    font-family: 'Rubik Glitch', cursive;
  }
  40%{
    font-family: 'Rubik Glitch', cursive;
  }
  41%{
    font-family: 'Noto Nastaliq Urdu', serif;
  }
  45%{
    font-family: 'Noto Nastaliq Urdu', serif;
  }
  46%{
    font-family: 'Rubik Glitch', cursive;
  }
  50%{
    font-family: 'Rubik Glitch', cursive;
  }
  51%{
    font-family: 'Baloo 2', cursive;
  }
  55%{
    font-family: 'Baloo 2', cursive;
  }
  56%{
    font-family: 'Rubik Glitch', cursive;
  }
  60%{
    font-family: 'Rubik Glitch', cursive;
  }
  61%{
    font-family: 'Inspiration', cursive;
  }
  65%{
    font-family: 'Inspiration', cursive;
  }
  66%{
    font-family: 'Rubik Glitch', cursive;
  }
  70%{
    font-family: 'Rubik Glitch', cursive;
  }
  71%{
    font-family: 'Bungee Hairline', cursive;
  }
  75%{
    font-family: 'Bungee Hairline', cursive;
  }
  76%{
    font-family: 'Rubik Glitch', cursive;
  }
  90%{
    font-family: 'Rubik Glitch', cursive;
  }
  91%{
    font-family: 'Bungee Outline', cursive;
  }
  95%{
    font-family: 'Bungee Outline', cursive;
  }
  96%{
    font-family: 'Rubik Glitch', cursive;
  }
  100%{
    font-family: 'Rubik Glitch', cursive;
  }
}

@keyframes glitch-font-size{
  from,to{
    font-size:9rem;
  }
  50%{
    font-size:9.2rem;
    
  }
}

@keyframes glitch-font-move-up{
  0%,10%,100%{
      transform: translateY(0%);

  }
  5%{
      transform: translateY(-100%);
  }
  34%,41%{
      transform: translateX(0%);
    
  }
  35%{
      transform: translateX(-100%);
    
  }
  40%{
      transform: translateX(100%);
    
  }
}

@keyframes glitch-font-slicing{
  0%,50%,100%{
  transform: skewX(0deg) translateX(0px) scale(1,1);
    
  }
  5%,15%,25%{
  transform: skewX(12deg) translateX(-5px) scale(1,-1);
  }
  10%,30%{
  transform: skewX(25deg) translateX(15px) scale(1,1);
  }
  35%,45%{
  transform: skewX(-12deg) translateX(-5px) scale(1,1);
  }
}
</style>