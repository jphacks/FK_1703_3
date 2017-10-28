/*
 * Copyright 2017, Google Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are
 * met:
 *
 *     * Redistributions of source code must retain the above copyright
 * notice, this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above
 * copyright notice, this list of conditions and the following disclaimer
 * in the documentation and/or other materials provided with the
 * distribution.
 *     * Neither the name of Google Inc. nor the names of its
 * contributors may be used to endorse or promote products derived from
 * this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

/*
 * Automatically generated by tools/codegen/core/gen_settings_ids.py
 */

#include "src/core/ext/transport/chttp2/transport/http2_settings.h"

#include <grpc/support/useful.h>
#include "src/core/lib/transport/http2_errors.h"

const uint16_t grpc_setting_id_to_wire_id[] = {1, 2, 3, 4, 5, 6, 65027};

bool grpc_wire_id_to_setting_id(uint32_t wire_id, grpc_chttp2_setting_id *out) {
  uint32_t i = wire_id - 1;
  uint32_t x = i % 256;
  uint32_t y = i / 256;
  uint32_t h = x;
  switch (y) {
    case 254:
      h += 4;
      break;
  }
  *out = (grpc_chttp2_setting_id)h;
  return h < GPR_ARRAY_SIZE(grpc_setting_id_to_wire_id) &&
         grpc_setting_id_to_wire_id[h] == wire_id;
}

const grpc_chttp2_setting_parameters
    grpc_chttp2_settings_parameters[GRPC_CHTTP2_NUM_SETTINGS] = {
        {"HEADER_TABLE_SIZE", 4096u, 0u, 4294967295u,
         GRPC_CHTTP2_CLAMP_INVALID_VALUE, GRPC_HTTP2_PROTOCOL_ERROR},
        {"ENABLE_PUSH", 1u, 0u, 1u, GRPC_CHTTP2_DISCONNECT_ON_INVALID_VALUE,
         GRPC_HTTP2_PROTOCOL_ERROR},
        {"MAX_CONCURRENT_STREAMS", 4294967295u, 0u, 4294967295u,
         GRPC_CHTTP2_DISCONNECT_ON_INVALID_VALUE, GRPC_HTTP2_PROTOCOL_ERROR},
        {"INITIAL_WINDOW_SIZE", 65535u, 0u, 2147483647u,
         GRPC_CHTTP2_DISCONNECT_ON_INVALID_VALUE,
         GRPC_HTTP2_FLOW_CONTROL_ERROR},
        {"MAX_FRAME_SIZE", 16384u, 16384u, 16777215u,
         GRPC_CHTTP2_DISCONNECT_ON_INVALID_VALUE, GRPC_HTTP2_PROTOCOL_ERROR},
        {"MAX_HEADER_LIST_SIZE", 16777216u, 0u, 16777216u,
         GRPC_CHTTP2_CLAMP_INVALID_VALUE, GRPC_HTTP2_PROTOCOL_ERROR},
        {"GRPC_ALLOW_TRUE_BINARY_METADATA", 0u, 0u, 1u,
         GRPC_CHTTP2_CLAMP_INVALID_VALUE, GRPC_HTTP2_PROTOCOL_ERROR},
};
