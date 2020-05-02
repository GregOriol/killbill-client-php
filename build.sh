#!/bin/sh

# killBillUrl='http://127.0.0.1:8080'
killBillUrl='https://killbill.diawi2.d.d-double-v.com'

curl -O ${killBillUrl}/swagger.json

jq . swagger.json > swagger-pretty.json

# Generate
java -jar swagger-codegen-cli.jar generate \
  --input-spec ./swagger.json \
  --lang php \
  --config .swagger-config.json \
  --type-mappings BigDecimal=float \
  --template-dir ./templates \
  --output .

# TODO
echo "The new generation will have overwritten the custom Invoice Item Types DISCOUNT and CREDIT, re-add them!"
