

import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';

// import { GLTFLoader } from 'three/addons/loaders/GLTFLoader.js';
// Scene, Camera, Renderer
function createPathStrings(filename) {
   const basePath = "./img/skybox/";
   const baseFilename = basePath + filename;
   const fileType = ".png";
   const sides = ["ft", "bk", "up", "dn", "rt", "lf"];//ag = bk
   const pathStrings = sides.map((side) => {
     return baseFilename + "_" + side + fileType;
   });
   return pathStrings;
 }
 
 function createMaterialArray(filename) {
   const skyboxImagepaths = createPathStrings(filename);
   const materialArray = skyboxImagepaths.map((image) => {
     let texture = new THREE.TextureLoader().load(image);
     return new THREE.MeshBasicMaterial({ map: texture, side: THREE.BackSide }); // <---
   });
   return materialArray;
 }
 
 function setSkyBox() {
   const materialArray = createMaterialArray(skyboxImage);
   // let temp = new THREE.TextureLoader().load("../img/space_stars_bg.jpg");
   // let temp1 = new THREE.MeshBasicMaterial({ map: temp, side: THREE.BackSide });
   let skyboxGeo = new THREE.BoxGeometry(200, 200, 200);
   skybox = new THREE.Mesh(skyboxGeo, materialArray);
   scene.add(skybox);


 }
 
 function init() {
   scene = new THREE.Scene();
   camera = new THREE.PerspectiveCamera(
     60,
     ratio,
     1,
     10000
   );
 
   setSkyBox();
   loadTexture("./img/earth_texture.jpg");
   scene.add(sphere); 
   
   let width = ratio * hauteur -16;
   renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
   renderer.setSize(width,hauteur);
   document.getElementById("terre").appendChild(renderer.domElement);
   renderer.domElement.id = "c";
 
   controls = new OrbitControls(camera, renderer.domElement);
   controls.enableDamping = true;
   controls.minDistance = 5;
   controls.maxDistance = 100;
 
   camera.position.z = 20;
 }
 
 function loadTexture(texture) {
   const geometry = new THREE.SphereGeometry(5, 32, 32);
   const loader = new THREE.TextureLoader();
   const earthTexture = loader.load(texture);
   const material = new THREE.MeshBasicMaterial({ map: earthTexture }); 
   sphere = new THREE.Mesh(geometry, material);

   
   let AlexMap = new THREE.BoxGeometry(18, 18, 18);
   const materialAG = new THREE.TextureLoader().load('./img/profileAlex.png');
   var materialCubeAG = new THREE.MeshBasicMaterial({ map: materialAG });
   cube2= new THREE.Mesh(AlexMap,materialCubeAG);   
   cube2.position.x = 65;
   cube2.position.y = 10;
   cube2.position.z = -60;
   scene.add(cube2);

 }
 
 function changeTextQuality(quality) {
   switch (quality) {
     case "high":
       scene.remove(sphere);
       loadTexture("./img/earth_hd.jpg");//"../img/earth_hd.jpg"
       scene.add(sphere);   

       break;
     case "low":
       scene.remove(sphere);
       loadTexture("./img/earth_texture.jpg");
       scene.add(sphere);
       break;
     default:
       console.log("error must choose between values: high / low");
   }
 }
 
 function animate() {
   requestAnimationFrame(animate);
   sphere.rotation.y += 0.002;
   cube2.rotation.x += 0.01;
   cube2.rotation.y += 0.01;

   controls.update();
   renderer.render(scene, camera);
 }
 
 function onWindowResize() {
   camera.aspect = window.innerWidth / hauteur;
   camera.updateProjectionMatrix();
   renderer.setSize(window.innerWidth, hauteur);
 }
 ////


let scene, camera, renderer, sphere, controls, skybox, cube2;
let skyboxImage = "space";

/*const sdBtn = document.querySelector(".sd");
const hdBtn = document.querySelector(".hd");

sdBtn.onclick = () => changeTextQuality("low");
hdBtn.onclick = () => changeTextQuality("high");*/

let hauteur = 450;
let ratio = window.innerWidth / hauteur;
init();
animate();
window.addEventListener("resize", onWindowResize, false);

