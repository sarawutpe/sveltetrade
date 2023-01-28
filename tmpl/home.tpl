<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  {* Favicon *}
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon-16x16.png">
  <link rel="manifest" href="./assets/site.webmanifest">
  <link rel="mask-icon" href="./assets/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">
  <title>{$settings.site_name|default:""} | Trading Platform</title>
  <link rel="stylesheet" href="./assets/css/home.css" />
</head>

<body>
  <div class="container">
    <div class="main">
      <section class="head-section">
        <a href="{"/"|encurl}">
          <img class="logo" src="./assets/img/logo.png" width="180px" height="22px" alt="logo" />
        </a>
        <div class="menu">
          {if $userinfo.logged === 1}
            <a href="{"?a=account"|encurl}">Dashboard</a>
          {else}
            <a href="{"?a=login"|encurl}">Sign in</a>
            <a href="{"?a=signup"|encurl}">Sigun up free</a>
          {/if}
        </div>
      </section>
      {* Classic *}
      <div id="classic-container">
        <div class="classic-inner">
          <div id="canvas-inner">
          </div>
          <div class="btn-version">
            <img src="./assets/img/version.svg" draggable="false" />
          </div>
          <div class="text-logo">
            <span class="fontWeight-semibold">SVELETE Trade</span>
            <span class="fontWeight-semibold">10X faster with AI</span>
            <img class="underline" src="./assets/img/underline.svg" width="auto" height="120px" draggable="false" />
          </div>
        </div>
      </div>
      {* Statistics *}
      <div class="statistic-content">
        <div class="statistic">
          {if $settings.show_info_box_total_accounts}
            {loaddata name="program_stats" stats="total_accounts" var=total_accounts}
            <span class="text-lg">{$total_accounts}</span>
          {/if}
          <span class="title fontWeight-semibold">Total accounts</span>
        </div>
        <div class="statistic">
          {if $settings.show_info_box_visitor_online == 1}
            {loaddata name="program_stats" stats="online_visitors" var=online_visitors}
            <span class="text-lg">{$online_visitors}</span>
          {/if}
          <span class="title fontWeight-semibold">Visitors online</span>
        </div>
        <div class="statistic">
          {if $settings.show_info_box_members_online == 1}
            {loaddata name="program_stats" stats="online_members" var=online_members}
            <span class="text-lg">{$online_members}</span>
          {/if}
          <span class="title fontWeight-semibold">Members online</span>
        </div>
      </div>
      {* Classic *}
      <div class="classic-bg">
        <img src="./assets/img/classic-ai.jpg" draggable="false" />
        <div class="classic-inner">
          <span class="text-lg">video production toolkits</span>
        </div>
      </div>
      {* Glass *}
      <section class="glass-content">
        <div class="glass-wrapper">
          <img class="coin-1" src="/assets/img/coin-1.png" alt="coin">
          <img class="coin-2" src="/assets/img/coin-2.png" alt="coin">
          <img class="coin-3" src="/assets/img/coin-3.png" alt="coin">
          <div class="glass-item">
            <div class="image">
              <img src="./assets/img/faster.png" alt="faster" />
            </div>
            <span class="title">Faster Loading Time </span>
            <span class="desc">
              Faster Loading Time Load only your chosen protocols, don't waste time loading unsed ones!
            </span>
          </div>
          <div class="glass-item">
            <div class="image">
              <img src="./assets/img/ecoin.png" alt="e-coin" />
            </div>
            <span class="title">Accept Multi Coin</span>
            <span class="desc">
              Faster Loading Time Load only your chosen protocols, don't waste time loading unsed ones!
            </span>
          </div>
          <div class="glass-item">
            <div class="image">
              <img src="./assets/img/world.png" alt="world" />
            </div>
            <span class="title">Global platform</span>
            <span class="desc">
              Faster Loading Time Load only your chosen protocols, don't waste time loading unsed ones!
            </span>
          </div>
        </div>
      </section>

      <div class="join-container">
        {if $userinfo.logged === 1}
          <a class="btn accent shadow" href="{"?a=account"|encurl}">
            Start now
          </a>
        {else}
          <a class="btn accent shadow" href="{"?a=signup"|encurl}">
            Start now
          </a>
        {/if}
      </div>
    </div>
    {* Footer *}
    <section class="footer">
      <div>
        <img class="logo" src="./assets/img/logo.png" width="180px" height="22px" alt="logo" />
        <span>Copyright © 2022 Ivypay.org All rights reserved.</span>
      </div>
      <div class="menu">
        {if $userinfo.logged === 1}
          <a href="{"?a=account"|encurl}">Dashboard</a>
        {else}
          <a href="{"?a=login"|encurl}">Sign in</a>
          <a href="{"?a=signup"|encurl}">Sigun up free</a>
        {/if}
      </div>
    </section>
  </div>

  {* ThreeJS *}
  {literal}
    <script id="vertexShader" type="x-shader/x-vertex">
      void main() {
      gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 1.0 );
      }
      </script>
    <script id="ortho-vs" type="x-shader/x-vertex">
      varying vec2 vUv;
      void main() {
      vUv = uv;
      gl_Position = projectionMatrix * modelViewMatrix * vec4( position, 0.5 );
      }
      </script>
    <script id="noiseVertexShader" type="x-shader/x-vertex">
      vec3 mod289(vec3 x)
      {
      return x - floor(x * (1.0 / 289.0)) * 289.0;
      }
      vec4 mod289(vec4 x)
      {
      return x - floor(x * (1.0 / 289.0)) * 289.0;
      }
      vec4 permute(vec4 x)
      {
      return mod289(((x*34.0)+1.0)*x);
      }
      vec4 taylorInvSqrt(vec4 r)
      {
      return 1.79284291400159 - 0.85373472095314 * r;
      }
      vec3 fade(vec3 t) {
      return t*t*t*(t*(t*6.0-15.0)+10.0);
      }
      // Classic Perlin noise
      float cnoise(vec3 P)
      {
      vec3 Pi0 = floor(P); // Integer part for indexing
      vec3 Pi1 = Pi0 + vec3(1.0); // Integer part + 1
      Pi0 = mod289(Pi0);
      Pi1 = mod289(Pi1);
      vec3 Pf0 = fract(P); // Fractional part for interpolation
      vec3 Pf1 = Pf0 - vec3(1.0); // Fractional part - 1.0
      vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
      vec4 iy = vec4(Pi0.yy, Pi1.yy);
      vec4 iz0 = Pi0.zzzz;
      vec4 iz1 = Pi1.zzzz;
      vec4 ixy = permute(permute(ix) + iy);
      vec4 ixy0 = permute(ixy + iz0);
      vec4 ixy1 = permute(ixy + iz1);
      vec4 gx0 = ixy0 * (1.0 / 7.0);
      vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
      gx0 = fract(gx0);
      vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
      vec4 sz0 = step(gz0, vec4(0.0));
      gx0 -= sz0 * (step(0.0, gx0) - 0.5);
      gy0 -= sz0 * (step(0.0, gy0) - 0.5);
      vec4 gx1 = ixy1 * (1.0 / 7.0);
      vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
      gx1 = fract(gx1);
      vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
      vec4 sz1 = step(gz1, vec4(0.0));
      gx1 -= sz1 * (step(0.0, gx1) - 0.5);
      gy1 -= sz1 * (step(0.0, gy1) - 0.5);
      vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
      vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
      vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
      vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
      vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
      vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
      vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
      vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);
      vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
      g000 *= norm0.x;
      g010 *= norm0.y;
      g100 *= norm0.z;
      g110 *= norm0.w;
      vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
      g001 *= norm1.x;
      g011 *= norm1.y;
      g101 *= norm1.z;
      g111 *= norm1.w;
      float n000 = dot(g000, Pf0);
      float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
      float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
      float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
      float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
      float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
      float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
      float n111 = dot(g111, Pf1);
      vec3 fade_xyz = fade(Pf0);
      vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
      vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
      float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
      return 1.2 * n_xyz;
      }
      // Classic Perlin noise, periodic variant
      float pnoise(vec3 P, vec3 rep)
      {
      vec3 Pi0 = mod(floor(P), rep); // Integer part, modulo period
      vec3 Pi1 = mod(Pi0 + vec3(1.0), rep); // Integer part + 1, mod period
      Pi0 = mod289(Pi0);
      Pi1 = mod289(Pi1);
      vec3 Pf0 = fract(P); // Fractional part for interpolation
      vec3 Pf1 = Pf0 - vec3(1.0); // Fractional part - 1.0
      vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
      vec4 iy = vec4(Pi0.yy, Pi1.yy);
      vec4 iz0 = Pi0.zzzz;
      vec4 iz1 = Pi1.zzzz;
      vec4 ixy = permute(permute(ix) + iy);
      vec4 ixy0 = permute(ixy + iz0);
      vec4 ixy1 = permute(ixy + iz1);
      vec4 gx0 = ixy0 * (1.0 / 7.0);
      vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
      gx0 = fract(gx0);
      vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
      vec4 sz0 = step(gz0, vec4(0.0));
      gx0 -= sz0 * (step(0.0, gx0) - 0.5);
      gy0 -= sz0 * (step(0.0, gy0) - 0.5);
      vec4 gx1 = ixy1 * (1.0 / 7.0);
      vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
      gx1 = fract(gx1);
      vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
      vec4 sz1 = step(gz1, vec4(0.0));
      gx1 -= sz1 * (step(0.0, gx1) - 0.5);
      gy1 -= sz1 * (step(0.0, gy1) - 0.5);
      vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
      vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
      vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
      vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
      vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
      vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
      vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
      vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);
      vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
      g000 *= norm0.x;
      g010 *= norm0.y;
      g100 *= norm0.z;
      g110 *= norm0.w;
      vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
      g001 *= norm1.x;
      g011 *= norm1.y;
      g101 *= norm1.z;
      g111 *= norm1.w;
      float n000 = dot(g000, Pf0);
      float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
      float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
      float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
      float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
      float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
      float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
      float n111 = dot(g111, Pf1);
      vec3 fade_xyz = fade(Pf0);
      vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
      vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
      float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
      return 2.0 * n_xyz;
      }
      varying vec3 vNormal;
      uniform float time;
      uniform float weight;
      uniform float morph;
      uniform float psize;

      void main() {
      float f = morph * pnoise( normal + time, vec3( 10.0 ) );
      vNormal = normalize(normal);
      vec4 pos = vec4( position + f * normal, 1.0 );
      gl_Position = projectionMatrix * modelViewMatrix * pos;
      gl_PointSize = psize;
      }
      </script>
    <script id="fs_ZoomBlur" type="x-shader/x-vertex">
      varying vec2 vUv;
      uniform sampler2D tDiffuse;
      uniform vec2 resolution;
      uniform float strength;
  float random(vec3 scale,float seed){return fract(sin(dot(gl_FragCoord.xyz+seed,scale))*43758.5453+seed);}
      void main() {
      vec2 center = .5 * resolution;
      vec4 color = vec4(0.0);
      float total = 0.0;
      vec2 toCenter=center-vUv*resolution;
      float offset=random(vec3(12.9898,78.233,151.7182),0.0);
      for(float t=0.0;t<=50.0;t++){
      float percent=(t+offset)/40.0;
      float weight = 100.0*(percent-percent*percent);
      vec4 sample=texture2D(tDiffuse,vUv+toCenter*percent*strength/resolution);
      sample.rgb*=sample.a;
      color+=sample*weight;
      total+=weight;
      }
      gl_FragColor = color/total;
      gl_FragColor.rgb /= gl_FragColor.a;
      //gl_FragDepth = color;
      }
      </script>
    <script id="fragmentShader" type="x-shader/x-vertex">
      vec3 mod289(vec3 x)
      {
      return x - floor(x * (1.0 / 289.0)) * 289.0;
      }
      vec4 mod289(vec4 x)
      {
      return x - floor(x * (1.0 / 289.0)) * 289.0;
      }
      vec4 permute(vec4 x)
      {
      return mod289(((x*34.0)+1.0)*x);
      }
      vec4 taylorInvSqrt(vec4 r)
      {
      return 1.79284291400159 - 0.85373472095314 * r;
      }
      vec3 fade(vec3 t) {
      return t*t*t*(t*(t*6.0-15.0)+10.0);
      }
      // Classic Perlin noise
      float cnoise(vec3 P)
      {
      vec3 Pi0 = floor(P); // Integer part for indexing
      vec3 Pi1 = Pi0 + vec3(1.0); // Integer part + 1
      Pi0 = mod289(Pi0);
      Pi1 = mod289(Pi1);
      vec3 Pf0 = fract(P); // Fractional part for interpolation
      vec3 Pf1 = Pf0 - vec3(1.0); // Fractional part - 1.0
      vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
      vec4 iy = vec4(Pi0.yy, Pi1.yy);
      vec4 iz0 = Pi0.zzzz;
      vec4 iz1 = Pi1.zzzz;
      vec4 ixy = permute(permute(ix) + iy);
      vec4 ixy0 = permute(ixy + iz0);
      vec4 ixy1 = permute(ixy + iz1);
      vec4 gx0 = ixy0 * (1.0 / 7.0);
      vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
      gx0 = fract(gx0);
      vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
      vec4 sz0 = step(gz0, vec4(0.0));
      gx0 -= sz0 * (step(0.0, gx0) - 0.5);
      gy0 -= sz0 * (step(0.0, gy0) - 0.5);
      vec4 gx1 = ixy1 * (1.0 / 7.0);
      vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
      gx1 = fract(gx1);
      vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
      vec4 sz1 = step(gz1, vec4(0.0));
      gx1 -= sz1 * (step(0.0, gx1) - 0.5);
      gy1 -= sz1 * (step(0.0, gy1) - 0.5);
      vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
      vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
      vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
      vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
      vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
      vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
      vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
      vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);
      vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
      g000 *= norm0.x;
      g010 *= norm0.y;
      g100 *= norm0.z;
      g110 *= norm0.w;
      vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
      g001 *= norm1.x;
      g011 *= norm1.y;
      g101 *= norm1.z;
      g111 *= norm1.w;
      float n000 = dot(g000, Pf0);
      float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
      float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
      float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
      float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
      float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
      float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
      float n111 = dot(g111, Pf1);
      vec3 fade_xyz = fade(Pf0);
      vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
      vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
      float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
      return 2.2 * n_xyz;
      }
      // Classic Perlin noise, periodic variant
      float pnoise(vec3 P, vec3 rep)
      {
      vec3 Pi0 = mod(floor(P), rep); // Integer part, modulo period
      vec3 Pi1 = mod(Pi0 + vec3(1.0), rep); // Integer part + 1, mod period
      Pi0 = mod289(Pi0);
      Pi1 = mod289(Pi1);
      vec3 Pf0 = fract(P); // Fractional part for interpolation
      vec3 Pf1 = Pf0 - vec3(1.0); // Fractional part - 1.0
      vec4 ix = vec4(Pi0.x, Pi1.x, Pi0.x, Pi1.x);
      vec4 iy = vec4(Pi0.yy, Pi1.yy);
      vec4 iz0 = Pi0.zzzz;
      vec4 iz1 = Pi1.zzzz;
      vec4 ixy = permute(permute(ix) + iy);
      vec4 ixy0 = permute(ixy + iz0);
      vec4 ixy1 = permute(ixy + iz1);
      vec4 gx0 = ixy0 * (1.0 / 7.0);
      vec4 gy0 = fract(floor(gx0) * (1.0 / 7.0)) - 0.5;
      gx0 = fract(gx0);
      vec4 gz0 = vec4(0.5) - abs(gx0) - abs(gy0);
      vec4 sz0 = step(gz0, vec4(0.0));
      gx0 -= sz0 * (step(0.0, gx0) - 0.5);
      gy0 -= sz0 * (step(0.0, gy0) - 0.5);
      vec4 gx1 = ixy1 * (1.0 / 7.0);
      vec4 gy1 = fract(floor(gx1) * (1.0 / 7.0)) - 0.5;
      gx1 = fract(gx1);
      vec4 gz1 = vec4(0.5) - abs(gx1) - abs(gy1);
      vec4 sz1 = step(gz1, vec4(0.0));
      gx1 -= sz1 * (step(0.0, gx1) - 0.5);
      gy1 -= sz1 * (step(0.0, gy1) - 0.5);
      vec3 g000 = vec3(gx0.x,gy0.x,gz0.x);
      vec3 g100 = vec3(gx0.y,gy0.y,gz0.y);
      vec3 g010 = vec3(gx0.z,gy0.z,gz0.z);
      vec3 g110 = vec3(gx0.w,gy0.w,gz0.w);
      vec3 g001 = vec3(gx1.x,gy1.x,gz1.x);
      vec3 g101 = vec3(gx1.y,gy1.y,gz1.y);
      vec3 g011 = vec3(gx1.z,gy1.z,gz1.z);
      vec3 g111 = vec3(gx1.w,gy1.w,gz1.w);
      vec4 norm0 = taylorInvSqrt(vec4(dot(g000, g000), dot(g010, g010), dot(g100, g100), dot(g110, g110)));
      g000 *= norm0.x;
      g010 *= norm0.y;
      g100 *= norm0.z;
      g110 *= norm0.w;
      vec4 norm1 = taylorInvSqrt(vec4(dot(g001, g001), dot(g011, g011), dot(g101, g101), dot(g111, g111)));
      g001 *= norm1.x;
      g011 *= norm1.y;
      g101 *= norm1.z;
      g111 *= norm1.w;
      float n000 = dot(g000, Pf0);
      float n100 = dot(g100, vec3(Pf1.x, Pf0.yz));
      float n010 = dot(g010, vec3(Pf0.x, Pf1.y, Pf0.z));
      float n110 = dot(g110, vec3(Pf1.xy, Pf0.z));
      float n001 = dot(g001, vec3(Pf0.xy, Pf1.z));
      float n101 = dot(g101, vec3(Pf1.x, Pf0.y, Pf1.z));
      float n011 = dot(g011, vec3(Pf0.x, Pf1.yz));
      float n111 = dot(g111, Pf1);
      vec3 fade_xyz = fade(Pf0);
      vec4 n_z = mix(vec4(n000, n100, n010, n110), vec4(n001, n101, n011, n111), fade_xyz.z);
      vec2 n_yz = mix(n_z.xy, n_z.zw, fade_xyz.y);
      float n_xyz = mix(n_yz.x, n_yz.y, fade_xyz.x);
      return 10.0 * n_xyz;
      }
      varying vec3 vNormal;
      uniform sampler2D tShine;
      uniform float time;
      uniform float RGBr;
      uniform float RGBg;
      uniform float RGBb;
      uniform float RGBn;
      uniform float RGBm;
      uniform float dnoise;

      float PI = 3.14159265358979323846264;
      void main() {
      float r = ( pnoise( RGBr * ( vNormal + time ), vec3( 10.0 ) ) );
      float g = ( pnoise( RGBg * ( vNormal + time ), vec3( 10.0 ) ) );
      float b = ( pnoise( RGBb * ( vNormal + time ), vec3( 10.0 ) ) );
      float n = pnoise( -1.0 * ( vNormal + time ), vec3( 10.0 ) );
      //n = pow( 1.0, n );
      n = 50.0 * pnoise( (RGBn) * ( vNormal ), vec3( 10.0 ) ) * pnoise( RGBm * ( vNormal + time ), vec3( 10.0 ) );
      n -= 0.10 * pnoise( dnoise * vNormal, vec3( 10.0 ) );
      vec3 color = vec3( r + n, g + n, b + n );
      gl_FragColor = vec4( color, 1.0 );
      }
      </script>
    <script id="fs_Composite" type="x-shader/x-vertex">
      varying vec2 vUv;
      uniform sampler2D tBase;
      uniform sampler2D tGlow;
      void main() {
      //Screen: X = 1- ((255-U)*(255-L))/255
      //vec4 color = 1.0 - ( ( 1.0 - texture2D( tGlow, vec2( vUv.x, vUv.y ) ) ) * ( 1.0 - texture2D( tBase, vUv ) ) );
      //vec4 color = mix( texture2D( tBase, vUv ), texture2D( tGlow, vec2( vUv.x, 1.0 - vUv.y ) ), .5 );
      //vec4 color = texture2D( tBase, vUv ) + texture2D( tGlow, vUv ) * texture2D( tGlow, vUv );
      vec4 color = texture2D( tGlow, vUv );
      gl_FragColor = vec4( color.rgb, 1.0 );
      }
      </script>
    <script src="./assets/js/three.js"></script>
    <script src="./assets/js/TweenMax.min.js"></script>
    <script src="./assets/js/three-init.js"></script>
    {* ThreeJS End *}

  {/literal}

</body>

</html>