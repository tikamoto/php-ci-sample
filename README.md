# PHP-CI-SAMPLE

PHPのCI環境テンプレート 

## Overview

以下の自動テストをGitHubActions上で動かしてCI環境を作るための、PHP8.2の最小構成テンプレートです。

- 静的解析テスト（[PHPStan](https://phpstan.org/)）
- ユニットテスト（[PHPUnit](https://phpunit.de/)）
- E2Eテスト（[Playwright](https://playwright.dev/)）

※詳細は[Qiitaの記事](https://qiita.com/tikamoto/items/03745ed7be082548433e)を参照

## Requirement

- Docker
- Node >= v20.0

## Install

```shell
npm install
npx playwright install
docker-compose up -d
```

## Usage

静的解析テスト実行
```
npm run test:static 
```

ユニットテスト実行
```
npm run test:phpunit 
```

E2Eテスト実行
```
npm run test:e2e 
```



