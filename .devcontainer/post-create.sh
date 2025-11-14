#!/usr/bin/env bash
set -euo pipefail

echo "Installing bundler 2.4.19 inside devcontainer..."
gem install --no-document bundler -v 2.4.19

echo "Configuring bundle path and installing dependencies..."
bundle _2.4.19_ config set --local path '.devcontainer/vendor/bundle'
bundle _2.4.19_ install
