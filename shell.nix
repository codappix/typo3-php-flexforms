{
  pkgs ? import <nixpkgs> { }
  ,phps ? import <phps>
}:

let
  php = pkgs.php82.buildEnv {
    extensions = { enabled, all }: enabled ++ (with all; [
      xdebug
    ]);
    extraConfig = ''
      xdebug.mode = debug
      memory_limit = 4G
    '';
  };
  inherit(php.packages) composer;

  projectInstall = pkgs.writeShellApplication {
    name = "project-install";
    runtimeInputs = [
      composer
    ];
    text = ''
      composer update --prefer-dist --no-progress
    '';
  };
  
  projectCglFix = pkgs.writeShellApplication {
    name = "project-cgl-fix";
    runtimeInputs = [
      composer
      php
    ];
    text = ''
      composer project:cgl:fix
    '';
  };

  projectCgl = pkgs.writeShellApplication {
    name = "project-cgl";
    runtimeInputs = [
      composer
      php
    ];
    text = ''
      composer project:cgl
    '';
  };

  projectPhpstan = pkgs.writeShellApplication {
    name = "project-phpstan";

    runtimeInputs = [
      composer
      php
    ];

    text = ''
      composer project:phpstan
    '';
  };

  projectTestUnit = pkgs.writeShellApplication {
    name = "project-test-unit";
    runtimeInputs = [
      composer
      php
      projectInstall
    ];
    text = ''
      project-install
      composer project:test:unit
    '';
  };

in pkgs.mkShell {
  name = "TYPO3 PHP FlexForms";
  buildInputs = [
    projectInstall
    projectCgl
    projectCglFix
    projectPhpstan
    projectTestUnit
    composer
    php
  ];

  shellHook = ''
    export typo3DatabaseDriver=pdo_sqlite
  '';
}
