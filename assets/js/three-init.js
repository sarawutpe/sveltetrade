// Three JS
window.addEventListener('load', init, false);
function init() {
  createWorld();
  createLights();
  createGrid();
  createSkin();
  createLife();
}

var Theme = {
  _gray: 0x222222,
  _dark: 0x000000, // Background
  _cont: 0x444444, // Lines
  _blue: 0x000fff,
  _red: 0xf00000, //
  _cyan: 0x00ffff, // Material
  _white: 0xf00589, // Lights
};

var scene, camera, renderer, container;
var _width, _height;
var _ambientLights, _lights, _rectAreaLight;
var _skin;

var mat;
var geo;
var groupMoon = new THREE.Object3D();

//--------------------------------------------------------------------
function createWorld() {
  _width = 270;
  _height = 270;
  //---
  scene = new THREE.Scene();
  scene.fog = new THREE.Fog(Theme._dark, 150, 320);
  // scene.background = new THREE.Color(Theme._dark);
  scene.add(groupMoon);
  //---
  camera = new THREE.PerspectiveCamera(20, _width / _height, 1, 1000);
  camera.position.set(0, 10, 120);
  //---

  // const canvas = document.getElementById('moon');
  // document.body.appendChild(canvas);
  // container = document.getElementById('canvas').nodeName;
  // document.getElementById('moon').appendChild(container);
  // document.body.appendChild(container);

  const classic = document.getElementById('canvas-inner');

  renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
  renderer.domElement.id = 'moon';
  renderer.setSize(_width, _height);
  // renderer.shadowMap.enabled = true;
  //---
  classic.appendChild(renderer.domElement);
  //---
  // window.addEventListener('resize', onWindowResize, false);
}
function onWindowResize() {
  _width = window.innerWidth;
  _height = window.innerHeight;
  renderer.setSize(_width, _height);
  camera.aspect = _width / _height;
  camera.updateProjectionMatrix();
}
//--------------------------------------------------------------------
function createLights() {
  _ambientLights = new THREE.HemisphereLight(Theme._cont, Theme._white, 1);
  _backlight = new THREE.PointLight(Theme._white, 1);
  _backlight.position.set(-5, -20, -20);
  //---
  _rectAreaLight = new THREE.RectAreaLight(Theme._white, 20, 3, 3);
  _rectAreaLight.position.set(0, 0, 2);
  //---
  _rectAreaLightHelper = new THREE.RectAreaLightHelper(_rectAreaLight);
  //---
  _frontlight = new THREE.PointLight(Theme._white, 2);
  _frontlight.position.set(20, 10, 0);
  //---
  scene.add(_backlight);
  scene.add(_ambientLights);
  scene.add(_rectAreaLight);
  scene.add(_frontlight);
  //scene.add(_rectAreaLightHelper);
}

var uniforms = {
  time: {
    type: 'f',
    value: 0.0,
  },
  RGBr: {
    type: 'f',
    value: 0.0,
  },
  RGBg: {
    type: 'f',
    value: 0.0,
  },
  RGBb: {
    type: 'f',
    value: 0.0,
  },
  RGBn: {
    type: 'f',
    value: 0.0,
  },
  RGBm: {
    type: 'f',
    value: 0.0,
  },
  morph: {
    type: 'f',
    value: 0.0,
  },
  dnoise: {
    type: 'f',
    value: 0.0,
  },
  psize: {
    type: 'f',
    value: 3.0,
  },
};

var options = {
  perlin: {
    time: 5.0,
    morph: 0.0,
    dnoise: 20.0,
  },
  chroma: {
    RGBr: 0.4,
    RGBg: 0.5,
    RGBb: 0.8,
    RGBn: 0.3,
    RGBm: 1.0,
  },
  camera: {
    zoom: 150,
    speedY: 0.6,
    speedX: 0.0,
    guide: false,
  },
  sphere: {
    wireframe: false,
    points: false,
    psize: 3,
  },
};

function randomMoon() {
  TweenMax.to(options.chroma, 1, { RGBr: Math.random() * 10 });
  TweenMax.to(options.chroma, 1, { RGBg: Math.random() * 10 });
  TweenMax.to(options.chroma, 1, { RGBb: Math.random() * 10 });
  TweenMax.to(options.chroma, 1, { RGBn: Math.random() * 2 });
  TweenMax.to(options.chroma, 1, { RGBm: Math.random() * 5 });
}

skinElement = function (geo_frag = 5) {
  var geo_size = 20;
  if (geo_frag >= 5) geo_frag = 5;
  //---
  geo = new THREE.IcosahedronBufferGeometry(geo_size, geo_frag);
  //---
  mat = new THREE.ShaderMaterial({
    uniforms: uniforms,
    //attributes: attributes,
    side: THREE.DoubleSide,
    vertexShader: document.getElementById('noiseVertexShader').textContent,
    fragmentShader: document.getElementById('fragmentShader').textContent,
    wireframe: options.sphere.wireframe,
  });
  this.point = new THREE.Points(geo, mat);
  //---
  this.mesh = new THREE.Mesh(geo, mat);
  this.mesh.geometry.verticesNeedUpdate = true;
  this.mesh.geometry.morphTargetsNeedUpdate = true;
  this.mesh.reseivedShadow = true;
  this.mesh.castShadow = true;
  //---
  groupMoon.add(this.point);
  groupMoon.add(this.mesh);
  //---
};
//---
function createSkin() {
  _skin = new skinElement();
  _skin.mesh.scale.set(1, 1, 1);
  scene.add(_skin.mesh);
}

var gridHelper;

function createGrid(_gridY = -20) {
  gridHelper = new THREE.GridHelper(200, 20, Theme._cont, Theme._gray);
  gridHelper.position.y = _gridY;
  scene.add(gridHelper);
}

//--------------------------------------------------------------------

var frame = Date.now();
//---
function createLife() {
  var time = Date.now();
  //---
  uniforms.time.value = (options.perlin.time / 10000) * (time - frame);
  uniforms.morph.value = options.perlin.morph;
  uniforms.dnoise.value = options.perlin.dnoise;
  //---
  TweenMax.to(camera.position, 2, { z: 300 - options.camera.zoom });
  //---
  _skin.mesh.rotation.y += options.camera.speedY / 100;
  _skin.mesh.rotation.z += options.camera.speedX / 100;
  //---
  _skin.point.rotation.y = _skin.mesh.rotation.y;
  _skin.point.rotation.z = _skin.mesh.rotation.z;
  gridHelper.rotation.y = _skin.mesh.rotation.y;
  //---
  mat.uniforms['RGBr'].value = options.chroma.RGBr / 10;
  mat.uniforms['RGBg'].value = options.chroma.RGBg / 10;
  mat.uniforms['RGBb'].value = options.chroma.RGBb / 10;
  mat.uniforms['RGBn'].value = options.chroma.RGBn / 100;
  mat.uniforms['RGBm'].value = options.chroma.RGBm;
  mat.uniforms['psize'].value = options.sphere.psize;
  //---
  gridHelper.visible = options.camera.guide;
  //---
  _skin.mesh.visible = !options.sphere.points;
  _skin.point.visible = options.sphere.points;
  //---
  mat.wireframe = options.sphere.wireframe;
  //---
  camera.lookAt(scene.position);
  //---
  requestAnimationFrame(createLife);
  renderer.render(scene, camera);
}
