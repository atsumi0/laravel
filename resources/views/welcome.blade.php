<!DOCTYPE html>
<html>
<head>
  <title>ららべるてすと</title>
  <meta charset="UTF-8" />
  <!-- three.jsを読み込む -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r120/three.min.js"></script>
  <!-- index.jsを読み込む -->
  <!-- <script src="{{ asset('resources/js/index.js') }}"></script> -->
</head>
<body>
<!-- <canvas id="myCanvas"></canvas> -->
<script>
    // ------------------------------------------------
    // 絶対入れる部分
    // ------------------------------------------------

    // シーンを作成
    var scene = new THREE.Scene();


    // カメラを作成（カメラはperspectiveCamera）
    var camera = new THREE.PerspectiveCamera( 75, window.innerWidth/window.innerHeight, 0.1, 1000 );
    camera.position.z = 4;

    // rendererを作成（アンチエイリアスも指定）
    var renderer = new THREE.WebGLRenderer({antialias:true});

    // レンダラーの色、サイズを指定
    renderer.setClearColor("#000000");
    renderer.setSize( window.innerWidth, window.innerHeight );

    // DOMにrenderを追加する。
    document.body.appendChild( renderer.domElement );


    // ------------------------------------------------
    // プロジェクトごとに自由に書くところ
    // ------------------------------------------------

    // CubeをbasicMaterialで作成。
    var geometry = new THREE.BoxGeometry( 1, 1, 1 );
    var material = new THREE.MeshBasicMaterial({ color: "#433F81" });

    var cube = new THREE.Mesh( geometry, material );

    // Add cube to Scene
    scene.add( cube );

    // Render Loop
    var render = function () {
      requestAnimationFrame( render );

      cube.rotation.x += 0.01;
      cube.rotation.y += 0.01;

      // Render the scene
      renderer.render(scene, camera);
    };

    render();
  </script>
</body>
</html>