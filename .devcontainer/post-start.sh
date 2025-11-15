#!/usr/bin/env bash
set -euo pipefail

WORKSPACE_DIR="$(pwd)"
LOG="$WORKSPACE_DIR/.devcontainer/jekyll-serve.log"
PIDFILE="$WORKSPACE_DIR/.devcontainer/jekyll-serve.pid"

nohup bundle exec jekyll serve --host 0.0.0.0 --port 4000 --config _config.yml >"$LOG" 2>&1 &
echo $! > "$PIDFILE"
echo "Started Jekyll (PID $(cat "$PIDFILE"))"
