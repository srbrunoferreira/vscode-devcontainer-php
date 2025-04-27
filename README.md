# VS Code / Dev Container environment for general purpose PHP development

## Setup Overview

- PHP Code Sniffer - code style check.
- PHP Code Beautifier and Fixer - for formatting, following code style defined for PHP Code Sniffer.
- PHP Stan - for static analyssis check.
- A lot more of useful extensions for PHP - to avoid installing the ones you won't use, you need to edit the [devcontainer.json](.devcontainer/devcontainer.json).
- composer, git and npm - to avoid installing any of these, you need to edit the [Dockerfile](.devcontainer/Dockerfile).

## Stubs

The [Dockerfile](.devcontainer/Dockerfile) also downloads the latest (currently) available WordPress files from its GitHub to be used as stubs. You can remove it and add your own stubs.

You will need to adjust [phpstan.neon.dist](./phpstan.neon.dist)
