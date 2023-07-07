### Demonstração de polimorfismo no php.

- Para rodar a aplicação sem servidor web(apache ou NGINX) use o build server do php:
php -S localhost:9000 -t /public

#### Para contribuir com o projeto 

- "fork" o repositório;
- clone o repositório a partir do "fork" que você fez;
- clone na sua máquina;
- **IMPORTANTE**, Antes de "comitar" no seu repositório remoto, atualize teu repositório local com repositório do mantenedor, da seguinte forma: 
  a) git remote add add upstream https://github.com/silvioclipper/demostracao-polimorfismo-php(_**somente uma vez**_); 
  b) git pull upstream --rebase;
- 


phpcs --config-set default_standard PSR12

cd /caminho/para/o/repositorio # Navegue até o diretório do seu repositório Git
mkdir -p .git/hooks # Crie a pasta hooks se ainda não existir
echo "#!/bin/sh\n\nphpcs --standard=PSR12" > .git/hooks/pre-commit # Crie o gancho de pré-commit
chmod +x .git/hooks/pre-commit # Dê permissão de execução ao gancho de pré-commit


ubstituir "/caminho/para/o/repositorio" pelo caminho real para o diretório do seu repositório Git.