# Набор CLI для vk-api

1. **Склейка всех схем vk api в один файл json на основе `vkcom/vk-api-schema`**
   <br>Команда `make concat-vk-api`
   <br>Пример `schemas/vk-api.json`
   <br><br>
2. **Конвертер vk api из Json Schema в OpenAPI на основе `schemas/vk-api.json`**
   <br>Команда `make generate-vk-api-openapi`
   <br>Пример `schemas/vk-api.yaml`